@extends ('layouts.master')



@section ('content')
    @include ('sections.navigation')

    <h1>#PARTNERS</h1>
    <div style="display: flex;box-sizing: border-box;flex-wrap: wrap;justify-content: space-around; margin:5px;">
    @include ('sections.partners',[
    'url' => 'https://www.valeo.com/en/',
    'image' => '/partnersF/valeo.png',
    ])

    @include ('sections.partners',[
    'url' => 'www.iitd.ac.in/',
    'image' => '/partnersF/iitd.png',
    ])

    @include ('sections.partners',[
    'url' => 'https://www.nxp.com/',
    'image' => '/partnersF/nxp.png',
    ])

    @include ('sections.partners',[
    'url' => 'https://www.fortum.com/',
    'image' => '/partnersF/fortum.png',
    ])

    @include ('sections.partners',[
    'url' => 'https://engineersindia.com/',
    'image' => '/partnersF/eil.png',
    ])

    @include ('sections.partners',[
    'url' => 'https://www.agnii.gov.in/',
    'image' => '/partnersF/agnii.png',
    ])

    @include ('sections.partners',[
    'url' => 'www.napino.com/',
    'image' => '/partnersF/napino.png',
    ])

    @include ('sections.partners',[
    'url' => 'https://bounceshare.com/',
    'image' => '/partnersF/bounce.png',
    ])

    @include ('sections.partners',[
    'url' => 'www.phylion.com/',
    'image' => '/partnersF/phylion.png',
    ])

    @include ('sections.partners',[
    'url' => 'https://www.business-sweden.se/',
    'image' => '/partnersF/sweden.png',
    ])    

    </div>
    
    @include ('sections.footer')
@endsection

