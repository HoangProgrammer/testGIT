<?php

    namespace App\Http\Controllers;

    use Cassandra\Date;
    use Kreait\Firebase\Auth as FirebaseAuth;
    use Kreait\Firebase\Auth\SignInResult;
    use Kreait\Firebase\Exception\FirebaseException;
    use Google\Cloud\Storage\StorageClient;
    use Kreait\Laravel\Firebase\Facades\Firebase;
    use Kreait\Firebase\Contract\Storage;
    use App\Repositories\Product\ProductRepositoryInterface;
    use Illuminate\Http\Request;

    class ProductController extends Controller
    {
        protected $productRepository;
        protected $storage;

        function __construct(ProductRepositoryInterface $productRepository)
        {
            $this->productRepository = $productRepository;

        }

        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
//    return view('products.index');
//     return   $products=$this->productRepository->getProduct();
//            $now = explode('-', "20-10-2022");
//            $to = explode('-', "20-11-2022");

//            $this->GetDate($now[0]=1,$to[0]++);
            //
        }

        function GetDate( $now ,$to,$date=1,$moth=1){
            $T =[ [1, 31], [2, 28], [3, 31], [5, 31], [7, 31], [8, 31], [10, 31], [12, 31], [4, 30], [6, 30], [9, 30], [11, 30]];
            $implode=[];
            foreach ($T as $val){
                if(in_array($now[1],$val)){
                    for ($i=$now[0];$i<=$val[1];$i++){
                        if($now[0]==$val[1]){
                            $this->GetDate($now[0]=1,$val[1]++);
                        }
                        $year=date('Y');
                        $date=$now[0];
                        $string= "$date-$val[0]-$year";
                        $implode[]=$string;
                        $now[0]++;
                    }
                }
            }
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {



            //
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            $image = $request->image; //base64 string from frontend
            $firebase_storage_path = 'Image/';
            $name = $image->getClientOriginalName();
            $localfolder = public_path('images') . '/';


            try {
                $storage = new StorageClient(['keyFilePath' => getcwd() . '/datn-78189-firebase-adminsdk-1y7px-aaa92309a7.json']);

                $storage->bucket("my-bucket")->upload($localfolder, ['name' => $firebase_storage_path . $name]);
                echo "upload";
            } catch (\Exception $e) {
                echo $e->getMessage();
            }

//         return  back();


        }

        /**
         * Display the specified resource.
         *
         * @param int $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            $products = $this->productRepository->find($id);
            return response([
                'data' => $products
            ]);
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param int $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            //
        }

        /**
         * Update the specified resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @param int $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param int $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            //
        }
    }
