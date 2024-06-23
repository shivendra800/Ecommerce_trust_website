@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">

    <div class="carousel-inner">

        @foreach($slider as $key => $sliderItem)

        <div class="carousel-item {{ $key == 0 ? 'active':'' }}">
            @if($sliderItem->image)
            <img src="{{ asset("$sliderItem->image") }}" class="d-block w-100" alt="...">
            @endif

            {{-- <div class="carousel-caption d-none d-md-block">
            <h5>{{ $sliderItem->title }}</h5>
            <p>{{ $sliderItem->description }}</p>
        </div> --}}
        <div class="carousel-caption d-none d-md-block">
            <div class="custom-carousel-content">
                <h1>
                    {{ $sliderItem->title }}
                </h1>
                <p>
                    {{ $sliderItem->description }}
                </p>
                <div>
                    <!--<a href="#" class="btn btn-slider">-->
                    <!--    Get Now-->
                    <!--</a>-->
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
</button>
</div>

<div class="py-5 bg-white">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h2 style="color: red">श्री मंगला श्रृंगार आरती सेवा समिति में आपका स्वागत हैं!!</h2>
                <div class="underline mx-auto"> </div>
                <p>
                    संस्था का उद्देश्य भक्ति का प्रचार प्रसार तथा हमारे सबसे प्राचीनतम धर्म के मूल उद्देश्यों को लोगों तक पहुंचाना। हमारी समिति सांस्कृतिक विरासतो को सुरक्षित रखने के लिए पिछले लगभग चार वर्षो से अछ अयोध्या धाम परिक्षेत्र में कार्यरत है। असहायों व वंचितों को उनकी आवश्यकता नुसार सेवाएं प्रदान करना हमारी समिति की प्राथमिकता सूची में है। हमारा मानना है कि यदि हमारे समाज का प्रत्येक व्यक्ति सुखी व मूलभूत आवश्यक -ताओं से परिपूर्ण होगा, इसी क्रम में संस्कृति एवं सनातन धर्म का संरक्षण व प्रचार- प्रसार सफलतम रूप में हो सकेगा
                    <br>
                    समिति का ध्येय 'सेवा ही परमो धर्मः' तथा 'मानव सेवा ही परमो धर्म चरितार्थ हो, इसका अन्यतम प्रयास हमारी समिति द्वारा चिरकाल तक चलता रहेगा।


                </p>

            </div>
        </div>
    </div>
</div>

{{-- about --}}

<div class="py-5">
    <div class="container">
        <div class="row">

            <div class="card card col-lg-3" style="">
                <img src="{{ url('/') }}/assets/product_image/sermon-8.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                      <h5 class="card-title">भक्ति के प्रचार प्रसार सम्बन्धी निरन्तर सेवा</h5>

                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">अयोध्या धाम के प्रमुख मन्दिरों का समयानुसार सोशल मीडिया के विभिन्न माध्यमों से प्रतिदिन दर्शन।</li>
                    <li class="list-group-item">मुख्यतया हनुमानगढ़ी अयोध्या धाम के महाबली सरकार के प्रातःकालीन मंगला आरती का दर्शन।</li>
                    <li class="list-group-item">श्री राम जन्मभूमि अवस्थित श्री रामलला का शुभ दर्शन। </li>
                </ul>

            </div>
            <div class="card card col-lg-3" style="">
                <img src="{{ url('/') }}/assets/product_image/sermon-8.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">धार्मिक वार्षिक कार्यक्रम</h5>

                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">ज्येष्ठ मास के मंगलवार को प्रसाद वितरण कार्यक्रम।</li>
                    <li class="list-group-item">शरद पूर्णिमा कार्यक्रम।</li>
                    <li class="list-group-item">महाशिवरात्रि कार्यक्रम। </li>
                    <li class="list-group-item">रामनवमी कार्यक्रम। </li>
                    <li class="list-group-item">रामायण मेला। </li>
                    <li class="list-group-item">श्री सीताराम विवाह। </li>
                </ul>

            </div>
            <div class="card card col-lg-3" style="">
                <img src="{{ url('/') }}/assets/product_image/sermon-8.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">सामाजिक कार्यक्रम सेवा</h5>

                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">आपदा में आवश्यकतानुसार सेवा।</li>

                    <li class="list-group-item">अयोध्या के विभिन्न मेलों में सेवाएं।</li>
                    <li class="list-group-item">शीतकालीन आवश्यकता सेवाएं। </li>
                    <li class="list-group-item">सभी तरह के प्रोग्राम फोटो। </li>

                </ul>


            </div>
            <div class="card card col-lg-3" style="">
                <img src="{{ url('/') }}/assets/product_image/sermon-8.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">आरती का समय</h5>

                </div>
                <ul class="list-group list-group-flush">
                     <li class="list-group-item">सरयू आरती - 8:00 pm - 9:00 pm</li>
                    <li class="list-group-item">हनुमान जी की आरती- 8:00 pm - 9:00 pm</li>
                    <li class="list-group-item"> राम जी की आरती- 8:00 pm - 9:00 pm</li>
                    <li class="list-group-item"> शिव जी की आरती- 8:00 pm - 9:00 pm</li>
                    <li class="list-group-item"> शिव जी की आरती- 8:00 pm - 9:00 pm</li>

                </ul>

            </div>


        </div>
    </div>
</div>
<div class="py-5">
    <div class="container">
        <div class="row">

            <div class="col-lg-5"  >
                <div class="card card " style="">
                    <img src="{{ url('/') }}/assets/product_image/peakpx.jpg" class="card-img-top" alt="...">
                    
    
                </div>
                
                
                 
            </div>
            <div class=" col-lg-7"  >
                <div class="product-card-body">
                   <h4 class="f-700 mb-15 fs-20">श्री मंगला श्रृंगार आरती सेवा समिति</h4>
                   
                     
                        <p class="product-brand">संस्था के उद्देश्य
                            ये उद्देश्य पचायत उदयोना, गामीण साहित्य या ललित कला की शिक्षा के लिये जनसामान्यन के लिये
                            स्थायपित पुस्तककालयों/ वाचनालयों से बहुउदेशीय खादी ग्राम, उदयोग, से सम्बधित शिक्षा, ललित कला,
                            स्वास्थ्य एवं परिवार कल्याण व पर्यावरण संबंधी जानकारी लोगो तक निःशुल्क पहुँचाना एवं उन्हें
                            प्रोत्साहित करना। शैक्षिक विकास हेतु विद्यालयों/बालिका विद्यालयों/महाविद्यालयों/आवासी
                            विद्यालयों/विकलांग विद्यालयों/अल्पसंख्यक विद्यालयों/कालेजों/इण्टरमीडिएट कालेजों/
                            भाई0टी0आई0/कम्प्यूटर साफ्टवेयर हार्डवेयर व नेटवर्किग इत्यादि संस्थानों की स्थापना करना जिनमें
                            प्राथमिक स्तर से लेकर उच्च स्तर तक शिक्षण एवं प्रशिक्षण निःशुल्क इस्या करना। है</p>
                            
                            <h4 class="f-700 mb-15 fs-20">हम एक साथ कार्य करते हैं</h4>
                            <p class="product-brand">समाज कल्याण विभाग उत्तर प्रदेश, केन्द्रीय एवं राज्य समाज कल्याण बोर्ड, कपार्ट,
                                नाबार्ड, मानव संसाधन विकास मंत्रालय, यूनिसेफ, डवाकरा, सिफ्सा, सैफ इण्डिया, हेल्पेज इण्डिया, राजीद
                                फाउण्डेशन, नौराड, आक्सेम इण्डिया, केयर, राष्ट्रीय महिला कोष, विश्व बैंक, सूडा, डूडा, विश्व स्वास्थ्य
                                संगठन, अल्पसंख्यक विभाग उत्तर प्रदेश</p>
                                <h4 class="f-700 mb-15 fs-20">क्यों चुनें?</h4>
                    <ul class="yello-dot-list">
                        <li>स्वयंसेवी ( 2648 )</li>
                        <li>पुजारी ( 487 )</li>
                        <li>आयोजन ( 584 )</li>
                        <li>समुदाय ( 108 )</li>
                    </ul>
                        
                     
                </div>
                 
                

            </div>
           

        </div>
    </div>
</div>
 
{{-- trending  --}}
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Products</h4>
                <div class="underline mb-4"></div>


            </div>
            
            @if($tredingProducts)
            <div class="col-md-12">
                <div class="owl-carousel owl-theme four-carousel">
                    @foreach ($tredingProducts as $productItem )
                    <div class="item">
                        <div class="product-card ">
                            <div class="product-card-img">
                                <label class="stock bg-danger">New</label>
                                @if($productItem->productImages->count() > 0)
                                <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                                    <img src="{{ asset($productItem->productImages[0]->image) }}" alt="{{ $productItem->name }}">
                                </a>
                                @endif

                            </div>
                            <div class="product-card-body">
                                <p class="product-brand">{{ $productItem->brand }}</p>
                                <h5 class="product-name">
                                    <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                                        {{ $productItem->name }}
                                    </a>
                                </h5>
                                <div>
                                    <span class="selling-price">Rs {{ $productItem->selling_price }}</span>
                                    <span class="original-price">Rs {{ $productItem->original_price }}</span>
                                </div>
                                {{-- <div class="mt-2">
                                <a href="" class="btn btn1">Add To Cart</a>
                                <a href="" class="btn btn1"> <i class="fa fa-heart"></i> </a>
                                <a href="" class="btn btn1"> View </a>
                            </div> --}}
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
            @else
            <div class="col- md-12">
                <div class="p-2">
                    <h4>No Products Available for</h4>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>


{{-- New Arrivals Products --}}
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>New Arrivals Products</h4>
                <div class="underline mb-4"></div>


            </div>
            @if($tredingProducts)
            <div class="col-md-12">
                <div class="owl-carousel owl-theme four-carousel">
                    @foreach ($tredingProducts as $productItem )
                    <div class="item">
                        <div class="product-card">
                            <div class="product-card-img">
                                <label class="stock bg-danger">New</label>
                                @if($productItem->productImages->count() > 0)
                                <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                                    <img src="{{ asset($productItem->productImages[0]->image) }}" alt="{{ $productItem->name }}">
                                </a>
                                @endif

                            </div>
                            <div class="product-card-body">
                                <p class="product-brand">{{ $productItem->brand }}</p>
                                <h5 class="product-name">
                                    <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                                        {{ $productItem->name }}
                                    </a>
                                </h5>
                                <div>
                                    <span class="selling-price">Rs {{ $productItem->selling_price }}</span>
                                    <span class="original-price">Rs {{ $productItem->original_price }}</span>
                                </div>
                                {{-- <div class="mt-2">
                                <a href="" class="btn btn1">Add To Cart</a>
                                <a href="" class="btn btn1"> <i class="fa fa-heart"></i> </a>
                                <a href="" class="btn btn1"> View </a>
                            </div> --}}
                            
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
            @else
            <div class="col- md-12">
                <div class="p-2">
                    <h4>No Products Available for</h4>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
{{-- hotel --}}
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Hotels</h4>
                <div class="underline mb-4"></div>


            </div>
            @if($featuredproducts)
            <div class="col-md-12">
                <div class="owl-carousel owl-theme four-carousel">
                    @foreach ($featuredproducts as $productItem )
                    <div class="item">
                        <div class="product-card">
                            <div class="product-card-img">
                                <label class="stock bg-danger">New</label>
                                @if($productItem->productImages->count() > 0)
                                <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                                    <img src="{{ asset($productItem->productImages[0]->image) }}" alt="{{ $productItem->name }}">
                                </a>
                                @endif

                            </div>
                            <div class="product-card-body">
                                <p class="product-brand">{{ $productItem->brand }}</p>
                                <h5 class="product-name">
                                    <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                                        {{ $productItem->name }}
                                    </a>
                                </h5>
                                <div>
                                    <span class="selling-price">Rs {{ $productItem->selling_price }}</span>
                                    <span class="original-price">Rs {{ $productItem->original_price }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
            @else
            <div class="col- md-12">
                <div class="p-2">
                    <h4>No Products Available for</h4>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
{{-- static data --}}
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>हमारी सेवाएं</h4>
                <div class="underline mb-4"></div>


            </div>

            <div class="col-md-12">
                <div class="owl-carousel owl-theme four-carousel">

                    <div class="item">
                        <div class="product-card">
                            <div class="product-card-img">

                                <a href=" ">
                                    <img src="{{ url('/') }}/assets/product_image/peakpx.jpg " alt=" ">
                                </a>

                            </div>
                            <div class="product-card-body">
                                <p class="product-brand"> </p>
                                <h5 class="product-name text-center">
                                    <a href=" ">
                                        प्रसाद सेवा
                                    </a>
                                </h5>
                                <div>
                                    <span class="selling-price"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-card">
                            <div class="product-card-img">

                                <a href=" ">
                                    <img src="{{ url('/') }}/assets/product_image/peakpx.jpg " alt=" ">
                                </a>

                            </div>
                            <div class="product-card-body">
                                <p class="product-brand "> </p>
                                <h5 class="product-name text-center">
                                    <a href=" ">
                                        कुंडली
                                    </a>
                                </h5>
                                <div>
                                    <span class="selling-price"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-card">
                            <div class="product-card-img">

                                <a href=" ">
                                    <img src="{{ url('/') }}/assets/product_image/peakpx.jpg " alt=" ">
                                </a>

                            </div>
                            <div class="product-card-body">
                                <p class="product-brand"> </p>
                                <h5 class="product-name text-center">
                                    <a href=" ">
                                        रुद्राभिषेक
                                    </a>
                                </h5>
                                <div>
                                    <span class="selling-price"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-card">
                            <div class="product-card-img">

                                <a href=" ">
                                    <img src="{{ url('/') }}/assets/product_image/peakpx.jpg " alt=" ">
                                </a>

                            </div>
                            <div class="product-card-body">
                                <p class="product-brand"> </p>
                                <h5 class="product-name text-center">
                                    <a href=" ">
                                        सगीतमय रामायण
                                    </a>
                                </h5>
                                <div>
                                    <span class="selling-price"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-card">
                            <div class="product-card-img">

                                <a href=" ">
                                    <img src="{{ url('/') }}/assets/product_image/peakpx.jpg " alt=" ">
                                </a>

                            </div>
                            <div class="product-card-body">
                                <p class="product-brand"> </p>
                                <h5 class="product-name text-center">
                                    <a href=" ">
                                        सगीतमय सुंदरकांड
                                    </a>
                                </h5>
                                <div>
                                    <span class="selling-price"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-card">
                            <div class="product-card-img">

                                <a href=" ">
                                    <img src="{{ url('/') }}/assets/product_image/peakpx.jpg " alt=" ">
                                </a>

                            </div>
                            <div class="product-card-body">
                                <p class="product-brand"> </p>
                                <h5 class="product-name text-center">
                                    <a href=" ">
                                        श्री हनुमानजी महाराज का चोला
                                    </a>
                                </h5>
                                <div>
                                    <span class="selling-price"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-card">
                            <div class="product-card-img">

                                <a href=" ">
                                    <img src="{{ url('/') }}/assets/product_image/peakpx.jpg " alt=" ">
                                </a>

                            </div>
                            <div class="product-card-body">
                                <p class="product-brand"> </p>
                                <h5 class="product-name text-center">
                                    <a href=" ">
                                        भोग प्रसाद किसी भी मंदिर में
                                    </a>
                                </h5>
                                <div>
                                    <span class="selling-price"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-card">
                            <div class="product-card-img">

                                <a href=" ">
                                    <img src="{{ url('/') }}/assets/product_image/peakpx.jpg " alt=" ">
                                </a>

                            </div>
                            <div class="product-card-body">
                                <p class="product-brand"> </p>
                                <h5 class="product-name text-center">
                                    <a href=" ">
                                        गौ सेवा के लिऐ ( यथा शक्ति)
                                    </a>
                                </h5>
                                <div>
                                    <span class="selling-price"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-card">
                            <div class="product-card-img">

                                <a href=" ">
                                    <img src="{{ url('/') }}/assets/product_image/peakpx.jpg " alt=" ">
                                </a>

                            </div>
                            <div class="product-card-body">
                                <p class="product-brand"> </p>
                                <h5 class="product-name text-center">
                                    <a href=" ">
                                        वानर सेवा ( यथा शक्ति)
                                    </a>
                                </h5>
                                <div>
                                    <span class="selling-price"> </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="product-card">
                            <div class="product-card-img">

                                <a href=" ">
                                    <img src="{{ url('/') }}/assets/product_image/peakpx.jpg " alt=" ">
                                </a>

                            </div>
                            <div class="product-card-body">
                                <p class="product-brand"> </p>
                                <h5 class="product-name text-center">
                                    <a href=" ">
                                        सरयू आरती
                                    </a>
                                </h5>
                                <div>
                                    <span class="selling-price"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-card">
                            <div class="product-card-img">

                                <a href=" ">
                                    <img src="{{ url('/') }}/assets/product_image/peakpx.jpg " alt=" ">
                                </a>

                            </div>
                            <div class="product-card-body">
                                <p class="product-brand"> </p>
                                <h5 class="product-name text-center">
                                    <a href=" ">
                                        अयोध्या जी में ठहरने हेतु होटल एवं धर्मशाला
                                    </a>
                                </h5>
                                <div>
                                    <span class="selling-price"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-card">
                            <div class="product-card-img">

                                <a href=" ">
                                    <img src="{{ url('/') }}/assets/product_image/peakpx.jpg " alt=" ">
                                </a>

                            </div>
                            <div class="product-card-body">
                                <p class="product-brand"> </p>
                                <h5 class="product-name text-center">
                                    <a href=" ">
                                        गाड़ी हेतु
                                    </a>
                                </h5>
                                <div>
                                    <span class="selling-price"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-card">
                            <div class="product-card-img">

                                <a href=" ">
                                    <img src="{{ url('/') }}/assets/product_image/peakpx.jpg " alt=" ">
                                </a>

                            </div>
                            <div class="product-card-body">
                                <p class="product-brand"> </p>
                                <h5 class="product-name text-center">
                                    <a href=" ">
                                        अयोध्या दर्शन
                                    </a>
                                </h5>
                                <div>
                                    <span class="selling-price"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-card">
                            <div class="product-card-img">

                                <a href=" ">
                                    <img src="{{ url('/') }}/assets/product_image/peakpx.jpg " alt=" ">
                                </a>

                            </div>
                            <div class="product-card-body">
                                <p class="product-brand"> </p>
                                <h5 class="product-name text-center">
                                    <a href=" ">
                                        अयोध्या दर्शन
                                    </a>
                                </h5>
                                <div>
                                    <span class="selling-price"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
{{-- members --}}
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>सदस्य</h4>
                <div class="underline mb-4"></div>


            </div>

            <div class="col-md-12">
                <div class="owl-carousel owl-theme four-carousel">

                    <div class="item">
                        <div class="product-card">
                            <div class="product-card-img">

                                <a href=" ">
                                    <img src="{{ url('/') }}/assets/mahesh_tiwari.jpg " alt=" ">
                                </a>

                            </div>
                            <div class="product-card-body">
                                <p class="product-brand"> </p>
                                <h5 class="product-name text-center">
                                    <a href=" ">
                                        महेश तिवारी
                                    </a>
                                </h5>
                                <div>
                                    <span class="selling-price"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-card">
                            <div class="product-card-img">

                                <a href=" ">
                                    <img src="{{ url('/') }}/assets/aman_tripathi.jpg " alt=" ">
                                </a>

                            </div>
                            <div class="product-card-body">
                                <p class="product-brand "> </p>
                                <h5 class="product-name text-center">
                                    <a href=" ">
                                        अमन त्रिपाठी
                                    </a>
                                </h5>
                                <div>
                                    <span class="selling-price"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-card">
                            <div class="product-card-img">

                                <a href=" ">
                                    <img src="{{ url('/') }}/assets/product_image/ramsingle.jpg " alt=" ">
                                </a>

                            </div>
                            <div class="product-card-body">
                                <p class="product-brand"> </p>
                                <h5 class="product-name text-center">
                                    <a href=" ">
                                        विकास पांडेय
                                    </a>
                                </h5>
                                <div>
                                    <span class="selling-price"> </span>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>



        </div>
    </div>
</div>
@endsection


@section('script')

<script>
    $('.four-carousel').owlCarousel({
        loop: true
        , margin: 10
        , nav: true
        , responsive: {
            0: {
                items: 1
            }
            , 600: {
                items: 3
            }
            , 1000: {
                items: 4
            }
        }
    })

</script>

@endsection
