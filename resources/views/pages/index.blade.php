@extends ('layouts.index')
<div class="banner" >

@section('content')
<div class="bannertext">
    <h1>  <span style="color: #4c4ca0">Lianne's Hairstyling</h1></span>
    <h3>{{ $subtitle }}</h3>
</div>
</div >

<div class="overgang-shape overgang-shape-bottom">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 200" preserveAspectRatio="none">
        <path class="svg-shape-fill" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z"></path>
        <path class="svg-shape-fill" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"></path>
        <path class="svg-shape-fill" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"></path>
    </svg>
</div>

<div class="grid-container">
    <div id="anchor-point-1"></div>
<div class="item1">
    <h2>Even voorstellen!</h2>
    <p> Welkom op de pagina van Lianne’s haarstyling. 
            Hier vind u alle behandelingen en producten die ik lever. 
        Kijk gerust even rond en mocht u iets vinden neem dan contact op. <br> <br>
                    mijn naam is Lianne. Ik kom uit Gemert en ben in april 2020 voor mezelf 
                    begonnen als ambulante kapster. Dit is een droom die ik al heel mijn leven heb.
                    Ik heb in verschillende salons gewerkt waardoor ik veel verschillende ervaringen 
                    op heb gedaan. Dus bent u nog opzoek naar een kapster aan huis. 
        Zoek dan niet verder en stuur een berichtje.</p>
</div>

    <div class="item2">
    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FLiannes-haarstyling-101793808179858&tabs=timeline%2C%20messages&width=300&height=400&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" height="400" style="border:none;overflow:hidden" ></iframe>
    </div>
</div>



@endsection

