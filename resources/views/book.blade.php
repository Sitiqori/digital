<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"></head>
</head>
<style>

body{
    height: 100vh; 
    background-color: #fdfcfb;
}
.body-content{
    height: 100vh;
    
}
.sidebar{
    background-color: #EEEFE1;
    padding-top: 20px;
    height: 100vh;
    
}
.sidebar a{
    color: #1C1A1B;
    text-decoration: none;
    display: block;
    padding: 12px;
    padding-left: 50px;
    
}
.kepala{
    width: 3rem;
    margin-left: 2rem;
    margin-bottom: 2rem;
}
.logo{
    background-color: #1C1A1B;
    width: 3rem;
    height: 3rem;
    border-radius: 80%;
}
.kiri{
    padding: 1rem;
    padding-left: 2rem;
    font-family: marmelad;
}
.ki-ats{
    width: 100%;
    background-color: lightgray;
    height: 20%;
    border-radius: 5px;
}
.ki-input{
    width: 100%;
}
.ki-tg-j{
    margin-top: 2rem;
    font-size: 22px;
    text-align: center;
    margin-bottom: 1rem;
}
.ki-tg-book{
    width: 100px;
    margin-right: 20px;
}
.ki-tg-bcover{
    background-color: lightgray;
    width: 96px;
    height: 128px;
    align-items: center;
    border-radius: 5px;
}
.ki-tg-bjudul{
    color: #1C1A1B;
    font-size: 20pxpx;
    text-align: center;
}
.ki-tg-bbutton{
    background-color: #1C1A1B;
    text-align: center;
    margin: 7px;
    font-size: 11px;
    color: #fdfcfb;
    padding: 3px;
}


.kanan{
    padding: 1rem;
}
.kanan1{
    font-family: marmelad;
    padding-top: 1rem;
}
.kanan2{
    background-color: lightgray;
    width: 50%;
    position: relative;
    right: 15px;
    height:13rem;
    border-radius: 5px;
}
.jud-ka{
    font-size: 20px;
}
.desk-ka{
    font-size: 15px;
    width: 90%;
}

.ke1{
    background-color: gray;
    width: 96px;
    height: 128px;
    border-radius: 5%;
    margin-right: 1rem;
}


.ka-tg-isi{
    margin-top: 2rem;
}
.ka-i-d-desk{
    background-color: #fdfcfb;
    width: 100%;
    height: 115px;
    padding-left: 1rem;
}
.ka-d-ds{
    font-size: 14px;
    padding: 7px;
}
.ka-i-d-gmb{
    background-color: lightgray;
    width: 96px;
    height: 128px;
    position: relative;
    bottom: 20px;
}


</style>
<body>
<div class="main d-flex flex-column justify-content-between">
            <div class="body-content h-100">
                <div class="row g-0 h-100">
                    <div class="sidebar col-lg-1 collapse d-lg-block" id="navbarTogglerDemo02">
                        <div class="kepala">
                            <h6 class="logo"></h6>
                        </div>
                            <a href="/dashboard" >H</a>
                            <a href="/books" >B</a>
                            <a href="/rent">R</a>
                            <a href="/library">L</a>
                    </div>
                    <div class="content col-lg-11 d-flex">
                        <div class="kiri col-lg-6 mt-4">
                            
                            <input type="text" class=" ki-input" placeholder="Search" value="">
                            <div class="ki-ats mt-3"></div>
                            <div class="ki-tg-isi mt-5 d-flex">
                                <div class="ki-tg-book">
                                    <div class="ki-tg-bcover"></div>
                                    <div class="ki-tg-bjudul">Mavka The Forest Song</div>
                                    <div class="ki-tg-bbutton">More Detail</div>
                                </div>
                                <div class="ki-tg-book">
                                    <div class="ki-tg-bcover"></div>
                                    <div class="ki-tg-bjudul">The Magicians Elephant</div>
                                    <div class="ki-tg-bbutton">More Detail</div>
                                </div>
                                <div class="ki-tg-book">
                                    <div class="ki-tg-bcover"></div>
                                    <div class="ki-tg-bjudul">Trolls Holiday in Harmony</div>
                                    <div class="ki-tg-bbutton">More Detail</div>
                                </div>
                                <div class="ki-tg-book">
                                    <div class="ki-tg-bcover"></div>
                                    <div class="ki-tg-bjudul">Baby Boss Business</div>
                                    <div class="ki-tg-bbutton">More Detail</div>
                                </div>
                                <div class="ki-tg-book">
                                    <div class="ki-tg-bcover"></div>
                                    <div class="ki-tg-bjudul">Mavka The Forest Song</div>
                                    <div class="ki-tg-bbutton">More Detail</div>
                                </div>
                                <div class="ki-tg-book">
                                    <div class="ki-tg-bcover"></div>
                                    <div class="ki-tg-bjudul">The Magicians Elephant</div>
                                    <div class="ki-tg-bbutton">More Detail</div>
                                </div>
                                
                            </div>
                            <div class="ki-tg-isi mt-4 d-flex">
                                <div class="ki-tg-book">
                                    <div class="ki-tg-bcover"></div>
                                    <div class="ki-tg-bjudul">Mavka The Forest Song</div>
                                    <div class="ki-tg-bbutton">More Detail</div>
                                </div>
                                <div class="ki-tg-book">
                                    <div class="ki-tg-bcover"></div>
                                    <div class="ki-tg-bjudul">The Magicians Elephant</div>
                                    <div class="ki-tg-bbutton">More Detail</div>
                                </div>
                                <div class="ki-tg-book">
                                    <div class="ki-tg-bcover"></div>
                                    <div class="ki-tg-bjudul">Trolls Holiday in Harmony</div>
                                    <div class="ki-tg-bbutton">More Detail</div>
                                </div>
                                <div class="ki-tg-book">
                                    <div class="ki-tg-bcover"></div>
                                    <div class="ki-tg-bjudul">Baby Boss Business</div>
                                    <div class="ki-tg-bbutton">More Detail</div>
                                </div>
                                <div class="ki-tg-book">
                                    <div class="ki-tg-bcover"></div>
                                    <div class="ki-tg-bjudul">Mavka The Forest Song</div>
                                    <div class="ki-tg-bbutton">More Detail</div>
                                </div>
                                <div class="ki-tg-book">
                                    <div class="ki-tg-bcover"></div>
                                    <div class="ki-tg-bjudul">The Magicians Elephant</div>
                                    <div class="ki-tg-bbutton">More Detail</div>
                                </div>
                            </div>                 
                        </div>


                        <div class="kanan col-lg-6">
                            <div class="ka-ats d-flex">
                                <div class="kanan1 col-lg-6 mt-4">
                                    <p class="jud-ka">
                                        Do You Love Reading Books? <br>We Have <span style="font-size: 28px; color: #E26266;">500++ </span>Books For You!
                                    </p>
                                    <p class="desk-ka">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium sequi non dolores consequatur assumenda sint tempora cumque provident, obcaecati ipsa sapiente ab, reprehenderit ddolorem?
                                    </p>
                                </div>
                                <div class="kanan2 col-lg-6 mt-4"></div>
                            </div>
            
                            <div class="ka-tg-isi d-flex">
                                <div class="ka-tg-i-list ">
                                    <div class=" d-flex">
                                        <div class="ke1"></div>
                                        <div class="ke1"></div>
                                        <div class="ke1"></div>
                                        <div class="ke1"></div>
                                        <div class="ke1"></div>
                                        <div class="ke1"></div>
                                    </div>
                                    <div class=" d-flex mt-3">
                                        <div class="ke1"></div>
                                        <div class="ke1"></div>
                                        <div class="ke1"></div>
                                        <div class="ke1"></div>
                                        <div class="ke1"></div>
                                        <div class="ke1"></div>
                                    </div>
                                    <div class=" d-flex mt-3">
                                        <div class="ke1"></div>
                                        <div class="ke1"></div>
                                        <div class="ke1"></div>
                                        <div class="ke1"></div>
                                        <div class="ke1"></div>
                                        <div class="ke1"></div>
                                    </div>
                                </div>
                                <!-- <div class="ka-tg-i-klpk col-lg-6 mt-4">
                                    <div class="ka-i-d-desk  d-flex">
                                        <p class="ka-d-ds col-lg-8"><span style="font-size: 16px;">The Half-Blood Prince</span> <br>Jk Rowlings <br>***** <br>More Detail</p>
                                        <div class="ka-i-d-gmb col-lg-4 "></div>
                                    </div>
                                    <div class="ka-i-d-desk d-flex mt-4">
                                        <p class="ka-d-ds col-lg-8"><span style="font-size: 16px;">The Half-Blood Prince</span> <br>Jk Rowlings <br>***** <br>More Detail</p>
                                        <div class="ka-i-d-gmb col-lg-4 "></div>
                                    </div>
                                    <div class="ka-i-d-desk d-flex mt-4">
                                        <p class="ka-d-ds col-lg-8"><span style="font-size: 16px;">The Half-Blood Prince</span> <br>Jk Rowlings <br>***** <br>More Detail</p>
                                        <div class="ka-i-d-gmb col-lg-4 "></div>
                                    </div>
                                </div> -->
                                
                            </div>
                        </div>



                        
                    </div>
                </div>
            </div>

        </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>