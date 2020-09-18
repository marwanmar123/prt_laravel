@extends('layouts.app')
@section('title', 'about')
@section('content')





<div class="flex flex-col lg:flex-row md:ml-24 p-12 text-white">
    <div class="flex-1 pr-6 mt-32 text-center" data-aos="fade-right">
        <h1 class="text-5xl fontprnc p-6">À propos de moi</h1>
        <p class="text-xl">Une personne passionné par la technologie, Ma
            mission dans la vie est de crée des applications
            web visuellement prestigieuses sans négliger les
            différnetes aspect performance de l’application.<br />
            professionnellement connecté avec l'industrie du
            développement Web et les technologies de l'information
            pendant un an.
        </p>
    </div>
    <div class="flex-1 flex-col pr-6 mt-32 text-center" data-aos="fade-left">
        <h1 class="fontprnc text-5xl p-6 md:ml-16">Formation</h1>
        <div class="flex flex-col md:pl-16 md:p-6">
            <p class="text-xl pl-2"><span class="text-2xl pr-2 fontprnc">Diplome :</span>Développeur web et mobile a
                l'école YOUCODE (en cour...).</p>
            <p class="text-xl pl-2"><span class="text-2xl pr-2 fontprnc">Diplome :</span>Baccalauréat a l'école Sijilmassa à Errachidia (2015-2016).
            </p>
        </div>
    </div>
</div>
<div class="text-white text-center" data-aos="fade-up">
    <h1 class="fontprnc text-5xl p-6 md:ml-16">Certificate (<SPAN class="text-gray-800">OPENCLASSROOMS</SPAN>)</h1>
    <div class="flex flex-col md:pl-16 md:p-6">
        <p class="text-xl pl-2"><span class="text-2xl pr-2 fontprnc">Certificate :</span> HTML5 et CSS3.</p>
        <p class="text-xl pl-2"><span class="text-2xl pr-2 fontprnc">Certificate :</span> JavaScript.
        </p>
    </div>
</div>

@endsection