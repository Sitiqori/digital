@extends('layouts.mainlayout')
@section('title', 'Home')
    
@section('conten')
<div class="isi justify-content-end col-lg-12 d-flex ">
    <div class="search col-lg-7 ">
        Search

        <p class="judul mt-5">
            Happy Reading, <br> Blabla
        </p>
        <p class="desk">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium sequi non dolores consequatur assumenda sint tempora cumque provident, obcaecati ipsa sapiente ab, reprehenderit doloribus quae perspiciatis adipisci natus atque dolorem?
        </p>
        <button class="next">
            Search->
        </button>

        <div class="books ">
            <p class="book-ju">Books</p>
            <div class=" d-flex">
                <div class="ke1"></div>
                <div class="ke1"></div>
                <div class="ke1"></div>
                <div class="ke1"></div>
                <div class="ke1"></div>
                <div class="ke1"></div>
                <div class="ke1"></div>
            </div>
        </div>

        <div class="cat-d ">
            <p class="cat-ju">Category</p>
            <div class=" d-flex">
                <div class="cat1">
                    <div class="log-cat"></div>
                    <p class="t-cat">Romance</p>
                </div>
                <div class="cat1">
                    <div class="log-cat"></div>
                    <p class="t-cat">Action</p>
                </div>
                <div class="cat1">
                    <div class="log-cat"></div>
                    <p class="t-cat">Horor</p>
                </div>
                <div class="cat1">
                    <div class="log-cat"></div>
                    <p class="t-cat">Fiction</p>
                </div>
                <div class="cat1">
                    <div class="log-cat"></div>
                    <p class="t-cat">Comedy</p>
                </div>
                <div class="cat1">
                    <div class="log-cat"></div>
                    <p class="t-cat">Thriller</p>
                </div>
                <div class="cat1">
                    <div class="log-cat"></div>
                    <p class="t-cat">History</p>
                </div>
                <div class="cat1">
                    <div class="log-cat"></div>
                    <p class="t-cat">Fantasy</p>
                </div>
                <div class="cat1">
                    <div class="log-cat"></div>
                    <p class="t-cat">Chicklit</p>
                </div>
            </div>
        </div>
        
    </div>

    
    <div class="acc justify-content-end col-lg-5">
        Account & Setting
        <div class="book-sin d-flex mt-5">
            <div class="c-book-sin d-flex"></div>
            <div class="ket-sin ">
                <p class="title">
                    The Prisoner of <span style=" font-size: 23px;"> Azkaban</span> -<span style=" font-size: 14px; font-family: sans-serif;">Jk Rowlings</span>
                </p>
                <p class="sin">
                    Lorem ipsum dolor sit . Voluptatibus quis eaque, reiciendis asperiores non dolorum mollitia consequuntur, distinctio iste laborum odit temporibus cupiditate?
                </p>
            </div>
        </div>
        <div class="menu ">
            <div class="isi-menu d-flex ">
                <div class="isi-m-1 justify-content-center ">
                    <p class="m-isi">500++ Readers</p>
                </div>
                <div class="isi-m-1">
                    <p class="m-isi">1200++ Rent</p>
                </div>
                <div class="isi-m-2 d-flex">
                    <div class="isi-m-2-1">
                        <p class="m-isi">2291 Book</p>
                    </div>
                    <div class="isi-m-2-2">
                        <p class="m-isi">100 Category</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="comentar ">
            <div class="com-g d-flex"></div>
            <div class="ket-com ">
                <p class="title-com">
                    What Does Our 500++ Readers Say? 
                </p>
            </div>
            <div class="com-com d-flex">
                <div class="com-isi">
                    <p class="com-isi-isi"><span style="font-size: 14px; color:#1C1A1B ;">--Reihard G Lws--  </span><br>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias quae inventore recusandae minima, animi tempora"</p>
                </div>
                <div class="com-isi">
                    <p class="com-isi-isi"><span style="font-size: 14px; color:#1C1A1B ;">--Reihard G Lws--  </span><br>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias quae inventore recusandae minima, animi tempora"</p>
                </div>
                <div class="com-isi">
                    <p class="com-isi-isi"><span style="font-size: 14px; color:#1C1A1B ;">--Reihard G Lws--  </span><br>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias quae inventore recusandae minima, animi tempora"</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
