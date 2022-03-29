<x-layout>
    <x-slot name='title'>Home</x-slot>
    <x-slot name='content'>
        <div class="mt-5">
            <div class="text-center">
                <img src="{{ asset('images/shamseer.jpg') }}" alt="" class="img-thumbnail" width="150px" height="auto">
            </div>
            <div class="mt-5 text-white mx=5 text-justify">
                    <h1 class="fw-bold st-font">Hello,</h1>
                    <div class="px-4" style="line-height: 2rem;">
                    <p style="text-indent:100px;"> My Name: <B class="text-warning">SHAMSEER MAKKANAMCHERY</B> from Kozhikode Kerla India .
                        I have Completed My Graduation From <i>Univercity of Calicut.</i> Currently I am Working in <B>PARIS FOOD INTERNATIONAL WLL</B>
                        Doha Qatar As a Finance Manager Since : 2009. Currently i am Learning Programming Cources From <b>IPSR Solutions Limited</b> Kochin Kerala like PHP,Phythom,Laravel,Artificial Inteligent,Android Dovelpoment etc..
                    </p>
                </div>
            </div>
            <div class="text-center">
                <a href="{{ route('contact')}}" class="btn btn-outline-warning mx-5 my-3">Hire Me</a>
                <a href="{{ route('contact')}}" class="btn btn-outline-info">Contact</a>
            </div>
        </div>
    </x-slot>
</x-layout>