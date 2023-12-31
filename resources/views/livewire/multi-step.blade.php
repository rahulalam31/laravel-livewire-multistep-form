<div>

    @if (!empty($successMessage))
        <div class="alert alert-success">
            {{ $successMessage }}
        </div>
    @endif

    {{-- <form id="myForm"> --}}


    @if ($currentStep == 1)
        <div id="step-1" class="clientFrom step p-0" data-id='1'>
            <div class="text-center pt-5">
                <img src="images/register-assets/mocal-logo.svg" />
            </div>
            <div class="modal-px-60 pt-5">
                <input type="email" placeholder="Enter Email Address" class="input-style input-font-bold"
                    wire:model="email" />

                <div class="d-flex mt-4">
                    <select name="country" class="ui fluid search selection dropdown input-font-bold" id="country" wire:model="country">
                        <option class="">Select Country</option>
                        {{-- <div class="menu"> --}}
                        <option class="item" value="af">
                            <i class="af flag"></i>Afghanistan
                        </option>
                        <option class="item" value="ax">
                            <i class="ax flag"></i>Aland Islands
                        </option>
                        <option class="item" value="al">
                            <i class="al flag"></i>Albania
                        </option>
                        <option class="item" value="dz">
                            <i class="dz flag"></i>Algeria
                        </option>
                        <option class="item" value="as">
                            <i class="as flag"></i>American Samoa
                        </option>
                        <option class="item" value="ad">
                            <i class="ad flag"></i>Andorra
                        </option>
                        <option class="item" value="ao">
                            <i class="ao flag"></i>Angola
                        </option>
                        <option class="item" value="ai">
                            <i class="ai flag"></i>Anguilla
                        </option>
                        <option class="item" value="ag">
                            <i class="ag flag"></i>Antigua
                        </option>
                        <option class="item" value="ar">
                            <i class="ar flag"></i>Argentina
                        </option>
                        <option class="item" value="am">
                            <i class="am flag"></i>Armenia
                        </option>
                        <option class="item" value="aw">
                            <i class="aw flag"></i>Aruba
                        </option>
                        <option class="item" value="au">
                            <i class="au flag"></i>Australia
                        </option>
                        <option class="item" value="at">
                            <i class="at flag"></i>Austria
                        </option>
                        <option class="item" value="az">
                            <i class="az flag"></i>Azerbaijan
                        </option>
                        <option class="item" value="bs">
                            <i class="bs flag"></i>Bahamas
                        </option>
                        <option class="item" value="bh">
                            <i class="bh flag"></i>Bahrain
                        </option>
                        <option class="item" value="bd">
                            <i class="bd flag"></i>Bangladesh
                        </option>
                        <option class="item" value="bb">
                            <i class="bb flag"></i>Barbados
                        </option>
                        <option class="item" value="by">
                            <i class="by flag"></i>Belarus
                        </option>
                        <option class="item" value="be">
                            <i class="be flag"></i>Belgium
                        </option>
                        <option class="item" value="bz">
                            <i class="bz flag"></i>Belize
                        </option>
                        <option class="item" value="bj">
                            <i class="bj flag"></i>Benin
                        </option>
                        <option class="item" value="bm">
                            <i class="bm flag"></i>Bermuda
                        </option>
                        <option class="item" value="bt">
                            <i class="bt flag"></i>Bhutan
                        </option>
                        <option class="item" value="bo">
                            <i class="bo flag"></i>Bolivia
                        </option>
                        <option class="item" value="ba">
                            <i class="ba flag"></i>Bosnia
                        </option>
                        <option class="item" value="bw">
                            <i class="bw flag"></i>Botswana
                        </option>
                        <option class="item" value="bv">
                            <i class="bv flag"></i>Bouvet Island
                        </option>
                        <option class="item" value="br">
                            <i class="br flag"></i>Brazil
                        </option>
                        <option class="item" value="vg">
                            <i class="vg flag"></i>British Virgin Islands
                        </option>
                        <option class="item" value="bn">
                            <i class="bn flag"></i>Brunei
                        </option>
                        <option class="item" value="bg">
                            <i class="bg flag"></i>Bulgaria
                        </option>
                        <option class="item" value="bf">
                            <i class="bf flag"></i>Burkina Faso
                        </option>
                        <option class="item" value="mm">
                            <i class="mm flag"></i>Burma
                        </option>
                        <option class="item" value="bi">
                            <i class="bi flag"></i>Burundi
                        </option>
                        <option class="item" value="tc">
                            <i class="tc flag"></i>Caicos Islands
                        </option>
                        <option class="item" value="kh">
                            <i class="kh flag"></i>Cambodia
                        </option>
                        <option class="item" value="cm">
                            <i class="cm flag"></i>Cameroon
                        </option>
                        <option class="item" value="ca">
                            <i class="ca flag"></i>Canada
                        </option>
                        <option class="item" value="cv">
                            <i class="cv flag"></i>Cape Verde
                        </option>
                        <option class="item" value="ky">
                            <i class="ky flag"></i>Cayman Islands
                        </option>
                        <option class="item" value="cf">
                            <i class="cf flag"></i>Central African Republic
                        </option>
                        <option class="item" value="td">
                            <i class="td flag"></i>Chad
                        </option>
                        <option class="item" value="cl">
                            <i class="cl flag"></i>Chile
                        </option>
                        <option class="item" value="cn">
                            <i class="cn flag"></i>China
                        </option>
                        <option class="item" value="cx">
                            <i class="cx flag"></i>Christmas Island
                        </option>
                        <option class="item" value="cc">
                            <i class="cc flag"></i>Cocos Islands
                        </option>
                        <option class="item" value="co">
                            <i class="co flag"></i>Colombia
                        </option>
                        <option class="item" value="km">
                            <i class="km flag"></i>Comoros
                        </option>
                        <option class="item" value="cg">
                            <i class="cg flag"></i>Congo Brazzaville
                        </option>
                        <option class="item" value="cd">
                            <i class="cd flag"></i>Congo
                        </option>
                        <option class="item" value="ck">
                            <i class="ck flag"></i>Cook Islands
                        </option>
                        <option class="item" value="cr">
                            <i class="cr flag"></i>Costa Rica
                        </option>
                        <option class="item" value="ci">
                            <i class="ci flag"></i>Cote optionoire
                        </option>
                        <option class="item" value="hr">
                            <i class="hr flag"></i>Croatia
                        </option>
                        <option class="item" value="cu">
                            <i class="cu flag"></i>Cuba
                        </option>
                        <option class="item" value="cy">
                            <i class="cy flag"></i>Cyprus
                        </option>
                        <option class="item" value="cz">
                            <i class="cz flag"></i>Czech Republic
                        </option>
                        <option class="item" value="dk">
                            <i class="dk flag"></i>Denmark
                        </option>
                        <option class="item" value="dj">
                            <i class="dj flag"></i>Djibouti
                        </option>
                        <option class="item" value="dm">
                            <i class="dm flag"></i>Dominica
                        </option>
                        <option class="item" value="do">
                            <i class="do flag"></i>Dominican Republic
                        </option>
                        <option class="item" value="ec">
                            <i class="ec flag"></i>Ecuador
                        </option>
                        <option class="item" value="eg">
                            <i class="eg flag"></i>Egypt
                        </option>
                        <option class="item" value="sv">
                            <i class="sv flag"></i>El Salvador
                        </option>
                        <option class="item" value="gb">
                            <i class="gb flag"></i>England
                        </option>
                        <option class="item" value="gq">
                            <i class="gq flag"></i>Equatorial Guinea
                        </option>
                        <option class="item" value="er">
                            <i class="er flag"></i>Eritrea
                        </option>
                        <option class="item" value="ee">
                            <i class="ee flag"></i>Estonia
                        </option>
                        <option class="item" value="et">
                            <i class="et flag"></i>Ethiopia
                        </option>
                        <option class="item" value="eu">
                            <i class="eu flag"></i>European Union
                        </option>
                        <option class="item" value="fk">
                            <i class="fk flag"></i>Falkland Islands
                        </option>
                        <option class="item" value="fo">
                            <i class="fo flag"></i>Faroe Islands
                        </option>
                        <option class="item" value="fj">
                            <i class="fj flag"></i>Fiji
                        </option>
                        <option class="item" value="fi">
                            <i class="fi flag"></i>Finland
                        </option>
                        <option class="item" value="fr">
                            <i class="fr flag"></i>France
                        </option>
                        <option class="item" value="gf">
                            <i class="gf flag"></i>French Guiana
                        </option>
                        <option class="item" value="pf">
                            <i class="pf flag"></i>French Polynesia
                        </option>
                        <option class="item" value="tf">
                            <i class="tf flag"></i>French Territories
                        </option>
                        <option class="item" value="ga">
                            <i class="ga flag"></i>Gabon
                        </option>
                        <option class="item" value="gm">
                            <i class="gm flag"></i>Gambia
                        </option>
                        <option class="item" value="ge">
                            <i class="ge flag"></i>Georgia
                        </option>
                        <option class="item" value="de">
                            <i class="de flag"></i>Germany
                        </option>
                        <option class="item" value="gh">
                            <i class="gh flag"></i>Ghana
                        </option>
                        <option class="item" value="gi">
                            <i class="gi flag"></i>Gibraltar
                        </option>
                        <option class="item" value="gr">
                            <i class="gr flag"></i>Greece
                        </option>
                        <option class="item" value="gl">
                            <i class="gl flag"></i>Greenland
                        </option>
                        <option class="item" value="gd">
                            <i class="gd flag"></i>Grenada
                        </option>
                        <option class="item" value="gp">
                            <i class="gp flag"></i>Guadeloupe
                        </option>
                        <option class="item" value="gu">
                            <i class="gu flag"></i>Guam
                        </option>
                        <option class="item" value="gt">
                            <i class="gt flag"></i>Guatemala
                        </option>
                        <option class="item" value="gw">
                            <i class="gw flag"></i>Guinea-Bissau
                        </option>
                        <option class="item" value="gn">
                            <i class="gn flag"></i>Guinea
                        </option>
                        <option class="item" value="gy">
                            <i class="gy flag"></i>Guyana
                        </option>
                        <option class="item" value="ht">
                            <i class="ht flag"></i>Haiti
                        </option>
                        <option class="item" value="hm">
                            <i class="hm flag"></i>Heard Island
                        </option>
                        <option class="item" value="hn">
                            <i class="hn flag"></i>Honduras
                        </option>
                        <option class="item" value="hk">
                            <i class="hk flag"></i>Hong Kong
                        </option>
                        <option class="item" value="hu">
                            <i class="hu flag"></i>Hungary
                        </option>
                        <option class="item" value="is">
                            <i class="is flag"></i>Iceland
                        </option>
                        <option class="item" value="in">
                            <i class="in flag"></i>India
                        </option>
                        <option class="item" value="io">
                            <i class="io flag"></i>Indian Ocean Territory
                        </option>
                        <option class="item" value="id">
                            <i class="id flag"></i>Indonesia
                        </option>
                        <option class="item" value="ir">
                            <i class="ir flag"></i>Iran
                        </option>
                        <option class="item" value="iq">
                            <i class="iq flag"></i>Iraq
                        </option>
                        <option class="item" value="ie">
                            <i class="ie flag"></i>Ireland
                        </option>
                        <option class="item" value="il">
                            <i class="il flag"></i>Israel
                        </option>
                        <option class="item" value="it">
                            <i class="it flag"></i>Italy
                        </option>
                        <option class="item" value="jm">
                            <i class="jm flag"></i>Jamaica
                        </option>
                        <option class="item" value="jp">
                            <i class="jp flag"></i>Japan
                        </option>
                        <option class="item" value="jo">
                            <i class="jo flag"></i>Jordan
                        </option>
                        <option class="item" value="kz">
                            <i class="kz flag"></i>Kazakhstan
                        </option>
                        <option class="item" value="ke">
                            <i class="ke flag"></i>Kenya
                        </option>
                        <option class="item" value="ki">
                            <i class="ki flag"></i>Kiribati
                        </option>
                        <option class="item" value="kw">
                            <i class="kw flag"></i>Kuwait
                        </option>
                        <option class="item" value="kg">
                            <i class="kg flag"></i>Kyrgyzstan
                        </option>
                        <option class="item" value="la">
                            <i class="la flag"></i>Laos
                        </option>
                        <option class="item" value="lv">
                            <i class="lv flag"></i>Latvia
                        </option>
                        <option class="item" value="lb">
                            <i class="lb flag"></i>Lebanon
                        </option>
                        <option class="item" value="ls">
                            <i class="ls flag"></i>Lesotho
                        </option>
                        <option class="item" value="lr">
                            <i class="lr flag"></i>Liberia
                        </option>
                        <option class="item" value="ly">
                            <i class="ly flag"></i>Libya
                        </option>
                        <option class="item" value="li">
                            <i class="li flag"></i>Liechtenstein
                        </option>
                        <option class="item" value="lt">
                            <i class="lt flag"></i>Lithuania
                        </option>
                        <option class="item" value="lu">
                            <i class="lu flag"></i>Luxembourg
                        </option>
                        <option class="item" value="mo">
                            <i class="mo flag"></i>Macau
                        </option>
                        <option class="item" value="mk">
                            <i class="mk flag"></i>Macedonia
                        </option>
                        <option class="item" value="mg">
                            <i class="mg flag"></i>Madagascar
                        </option>
                        <option class="item" value="mw">
                            <i class="mw flag"></i>Malawi
                        </option>
                        <option class="item" value="my">
                            <i class="my flag"></i>Malaysia
                        </option>
                        <option class="item" value="mv">
                            <i class="mv flag"></i>Maloptiones
                        </option>
                        <option class="item" value="ml">
                            <i class="ml flag"></i>Mali
                        </option>
                        <option class="item" value="mt">
                            <i class="mt flag"></i>Malta
                        </option>
                        <option class="item" value="mh">
                            <i class="mh flag"></i>Marshall Islands
                        </option>
                        <option class="item" value="mq">
                            <i class="mq flag"></i>Martinique
                        </option>
                        <option class="item" value="mr">
                            <i class="mr flag"></i>Mauritania
                        </option>
                        <option class="item" value="mu">
                            <i class="mu flag"></i>Mauritius
                        </option>
                        <option class="item" value="yt">
                            <i class="yt flag"></i>Mayotte
                        </option>
                        <option class="item" value="mx">
                            <i class="mx flag"></i>Mexico
                        </option>
                        <option class="item" value="fm">
                            <i class="fm flag"></i>Micronesia
                        </option>
                        <option class="item" value="md">
                            <i class="md flag"></i>Moldova
                        </option>
                        <option class="item" value="mc">
                            <i class="mc flag"></i>Monaco
                        </option>
                        <option class="item" value="mn">
                            <i class="mn flag"></i>Mongolia
                        </option>
                        <option class="item" value="me">
                            <i class="me flag"></i>Montenegro
                        </option>
                        <option class="item" value="ms">
                            <i class="ms flag"></i>Montserrat
                        </option>
                        <option class="item" value="ma">
                            <i class="ma flag"></i>Morocco
                        </option>
                        <option class="item" value="mz">
                            <i class="mz flag"></i>Mozambique
                        </option>
                        <option class="item" value="na">
                            <i class="na flag"></i>Namibia
                        </option>
                        <option class="item" value="nr">
                            <i class="nr flag"></i>Nauru
                        </option>
                        <option class="item" value="np">
                            <i class="np flag"></i>Nepal
                        </option>
                        <option class="item" value="an">
                            <i class="an flag"></i>Netherlands Antilles
                        </option>
                        <option class="item" value="nl">
                            <i class="nl flag"></i>Netherlands
                        </option>
                        <option class="item" value="nc">
                            <i class="nc flag"></i>New Caledonia
                        </option>
                        <option class="item" value="pg">
                            <i class="pg flag"></i>New Guinea
                        </option>
                        <option class="item" value="nz">
                            <i class="nz flag"></i>New Zealand
                        </option>
                        <option class="item" value="ni">
                            <i class="ni flag"></i>Nicaragua
                        </option>
                        <option class="item" value="ne">
                            <i class="ne flag"></i>Niger
                        </option>
                        <option class="item" value="ng">
                            <i class="ng flag"></i>Nigeria
                        </option>
                        <option class="item" value="nu">
                            <i class="nu flag"></i>Niue
                        </option>
                        <option class="item" value="nf">
                            <i class="nf flag"></i>Norfolk Island
                        </option>
                        <option class="item" value="kp">
                            <i class="kp flag"></i>North Korea
                        </option>
                        <option class="item" value="mp">
                            <i class="mp flag"></i>Northern Mariana Islands
                        </option>
                        <option class="item" value="no">
                            <i class="no flag"></i>Norway
                        </option>
                        <option class="item" value="om">
                            <i class="om flag"></i>Oman
                        </option>
                        <option class="item" value="pk">
                            <i class="pk flag"></i>Pakistan
                        </option>
                        <option class="item" value="pw">
                            <i class="pw flag"></i>Palau
                        </option>
                        <option class="item" value="ps">
                            <i class="ps flag"></i>Palestine
                        </option>
                        <option class="item" value="pa">
                            <i class="pa flag"></i>Panama
                        </option>
                        <option class="item" value="py">
                            <i class="py flag"></i>Paraguay
                        </option>
                        <option class="item" value="pe">
                            <i class="pe flag"></i>Peru
                        </option>
                        <option class="item" value="ph">
                            <i class="ph flag"></i>Philippines
                        </option>
                        <option class="item" value="pn">
                            <i class="pn flag"></i>Pitcairn Islands
                        </option>
                        <option class="item" value="pl">
                            <i class="pl flag"></i>Poland
                        </option>
                        <option class="item" value="pt">
                            <i class="pt flag"></i>Portugal
                        </option>
                        <option class="item" value="pr">
                            <i class="pr flag"></i>Puerto Rico
                        </option>
                        <option class="item" value="qa">
                            <i class="qa flag"></i>Qatar
                        </option>
                        <option class="item" value="re">
                            <i class="re flag"></i>Reunion
                        </option>
                        <option class="item" value="ro">
                            <i class="ro flag"></i>Romania
                        </option>
                        <option class="item" value="ru">
                            <i class="ru flag"></i>Russia
                        </option>
                        <option class="item" value="rw">
                            <i class="rw flag"></i>Rwanda
                        </option>
                        <option class="item" value="sh">
                            <i class="sh flag"></i>Saint Helena
                        </option>
                        <option class="item" value="kn">
                            <i class="kn flag"></i>Saint Kitts and Nevis
                        </option>
                        <option class="item" value="lc">
                            <i class="lc flag"></i>Saint Lucia
                        </option>
                        <option class="item" value="pm">
                            <i class="pm flag"></i>Saint Pierre
                        </option>
                        <option class="item" value="vc">
                            <i class="vc flag"></i>Saint Vincent
                        </option>
                        <option class="item" value="ws">
                            <i class="ws flag"></i>Samoa
                        </option>
                        <option class="item" value="sm">
                            <i class="sm flag"></i>San Marino
                        </option>
                        <option class="item" value="gs">
                            <i class="gs flag"></i>Sandwich Islands
                        </option>
                        <option class="item" value="st">
                            <i class="st flag"></i>Sao Tome
                        </option>
                        <option class="item" value="sa">
                            <i class="sa flag"></i>Saudi Arabia
                        </option>
                        <option class="item" value="sn">
                            <i class="sn flag"></i>Senegal
                        </option>
                        <option class="item" value="cs">
                            <i class="cs flag"></i>Serbia
                        </option>
                        <option class="item" value="rs">
                            <i class="rs flag"></i>Serbia
                        </option>
                        <option class="item" value="sc">
                            <i class="sc flag"></i>Seychelles
                        </option>
                        <option class="item" value="sl">
                            <i class="sl flag"></i>Sierra Leone
                        </option>
                        <option class="item" value="sg">
                            <i class="sg flag"></i>Singapore
                        </option>
                        <option class="item" value="sk">
                            <i class="sk flag"></i>Slovakia
                        </option>
                        <option class="item" value="si">
                            <i class="si flag"></i>Slovenia
                        </option>
                        <option class="item" value="sb">
                            <i class="sb flag"></i>Solomon Islands
                        </option>
                        <option class="item" value="so">
                            <i class="so flag"></i>Somalia
                        </option>
                        <option class="item" value="za">
                            <i class="za flag"></i>South Africa
                        </option>
                        <option class="item" value="kr">
                            <i class="kr flag"></i>South Korea
                        </option>
                        <option class="item" value="es">
                            <i class="es flag"></i>Spain
                        </option>
                        <option class="item" value="lk">
                            <i class="lk flag"></i>Sri Lanka
                        </option>
                        <option class="item" value="sd">
                            <i class="sd flag"></i>Sudan
                        </option>
                        <option class="item" value="sr">
                            <i class="sr flag"></i>Suriname
                        </option>
                        <option class="item" value="sj">
                            <i class="sj flag"></i>Svalbard
                        </option>
                        <option class="item" value="sz">
                            <i class="sz flag"></i>Swaziland
                        </option>
                        <option class="item" value="se">
                            <i class="se flag"></i>Sweden
                        </option>
                        <option class="item" value="ch">
                            <i class="ch flag"></i>Switzerland
                        </option>
                        <option class="item" value="sy">
                            <i class="sy flag"></i>Syria
                        </option>
                        <option class="item" value="tw">
                            <i class="tw flag"></i>Taiwan
                        </option>
                        <option class="item" value="tj">
                            <i class="tj flag"></i>Tajikistan
                        </option>
                        <option class="item" value="tz">
                            <i class="tz flag"></i>Tanzania
                        </option>
                        <option class="item" value="th">
                            <i class="th flag"></i>Thailand
                        </option>
                        <option class="item" value="tl">
                            <i class="tl flag"></i>Timorleste
                        </option>
                        <option class="item" value="tg">
                            <i class="tg flag"></i>Togo
                        </option>
                        <option class="item" value="tk">
                            <i class="tk flag"></i>Tokelau
                        </option>
                        <option class="item" value="to">
                            <i class="to flag"></i>Tonga
                        </option>
                        <option class="item" value="tt">
                            <i class="tt flag"></i>Trinidad
                        </option>
                        <option class="item" value="tn">
                            <i class="tn flag"></i>Tunisia
                        </option>
                        <option class="item" value="tr">
                            <i class="tr flag"></i>Turkey
                        </option>
                        <option class="item" value="tm">
                            <i class="tm flag"></i>Turkmenistan
                        </option>
                        <option class="item" value="tv">
                            <i class="tv flag"></i>Tuvalu
                        </option>
                        <option class="item" value="ug">
                            <i class="ug flag"></i>Uganda
                        </option>
                        <option class="item" value="ua">
                            <i class="ua flag"></i>Ukraine
                        </option>
                        <option class="item" value="ae">
                            <i class="ae flag"></i>United Arab Emirates
                        </option>
                        <option class="item" value="us">
                            <i class="us flag"></i>United States
                        </option>
                        <option class="item" value="uy">
                            <i class="uy flag"></i>Uruguay
                        </option>
                        <option class="item" value="um">
                            <i class="um flag"></i>Us Minor Islands
                        </option>
                        <option class="item" value="vi">
                            <i class="vi flag"></i>Us Virgin Islands
                        </option>
                        <option class="item" value="uz">
                            <i class="uz flag"></i>Uzbekistan
                        </option>
                        <option class="item" value="vu">
                            <i class="vu flag"></i>Vanuatu
                        </option>
                        <option class="item" value="va">
                            <i class="va flag"></i>Vatican City
                        </option>
                        <option class="item" value="ve">
                            <i class="ve flag"></i>Venezuela
                        </option>
                        <option class="item" value="vn">
                            <i class="vn flag"></i>Vietnam
                        </option>
                        <option class="item" value="wf">
                            <i class="wf flag"></i>Wallis and Futuna
                        </option>
                        <option class="item" value="eh">
                            <i class="eh flag"></i>Western Sahara
                        </option>
                        <option class="item" value="ye">
                            <i class="ye flag"></i>Yemen
                        </option>
                        <option class="item" value="zm">
                            <i class="zm flag"></i>Zambia
                        </option>
                        <option class="item" value="zw">
                            <i class="zw flag"></i>Zimbabwe
                        </option>
                        {{-- </div> --}}
                    </select>
                    {{-- <div class="ui fluid search selection dropdown input-font-bold" id="country">
                        <input type="hidden" name="country" wire:model="country" />
                        <i class="dropdown icon"></i>
                    </div> --}}

                    <input type="tel" placeholder="Enter Phone Number" class="input-style input-font-bold ps-3"
                        wire:model="phone" />
                </div>

                <div class="text-center">
                    <button class="btn-purple-fill btn-width-sm mt-5 " wire:click="increaseStep()">
                        Get Started
                    </button>
                    <div class="or"></div>
                    <a href="register-google.html" class="btn-gray-border signupbtn mb-3">
                        <img src="images/register-assets/ic-google.svg" /> Sign Up with Google
                    </a><br />

                    <a href="#.html" class="btn-gray-border signupbtn mb-3">
                        <img src="images/register-assets/ic-microsoft.svg" /> Sign Up with Microsoft
                    </a><br />

                    <p class="mt-4 mb-5">
                        Already have an account?
                        <a href="signin.html" class="anchor-blue text-decoration">Log in</a>
                    </p>
                </div>
            </div>
        </div>
    @endif



    @if ($currentStep == 2)
        <div id="step-2" class="clientFrom step p-0 Hideborder" data-id='2'>
            <div class="modal-content radius24">
                <div class="pt-5">
                    <div class="text-center border-btm">
                        <img src="images/signin-assets/mocal-logo.svg" class="logo-sm" />
                    </div>

                    <div class="modal-body pt-4 modal-px-60">
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="form-check d-inline-block me-3 ps-0 ms-0">
                                        <label for="individual">Company Details</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5">
                            <tinymce-editor api-key="no-api-key" height="500" menubar="false"
                                plugins="advlist autolink lists link image charmap print preview anchor
                              searchreplace visualblocks code fullscreen
                              insertdatetime media table paste code help wordcount"
                                toolbar="undo redo | formatselect | bold italic backcolor |
                              alignleft aligncenter alignright alignjustify |
                              bullist numlist outdent indent | removeformat | help"
                                content_style="body
                              {
                                font-family:Helvetica,Arial,sans-serif;
                                font-size:14px
                              }"
                                setup="setupEditor">

                                <!-- Adding some initial editor content -->
                                &lt;p&gt;Welcome to the TinyMCE Web Component example!&lt;/p&gt;

                            </tinymce-editor>
                            <textarea id="editor_detail" name="editor_detail" wire:model="detail"> </textarea>
                        </div>
                    </div>

                    <div class="text-center mt-5 pt-5 mb-5">
                        <button type="button" class="btn btn-white-fill " wire:click="decreaseStep()">
                            < Back</button>
                                <button type="button" class="btn btn-purple-fill " wire:click="increaseStep()"> Next
                                </button>
                    </div>
                </div>
            </div>
        </div>
    @endif



    @if ($currentStep == 3)

        <div id="step-3" class="clientFrom step p-0 Hideborder" data-id='3'>
            <div class="modal-content radius24">
                <div class="pt-5">

                    <div class="text-center border-btm">
                        <img src="images/signin-assets/mocal-logo.svg" class="logo-sm" />
                    </div>

                    <div class="modal-body pt-5 modal-px-60">
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- mainsite/assets/images/signed-offer-letter-assets/upload-img-2.png -->
                                    <div class="inputfiles">
                                        <div class="fileUploadWrap">
                                            @if ($photo)
                                                <img src="{{ $photo->temporaryUrl() }}" alt=""
                                                    class="DropIcon" />
                                            @else
                                                <div>

                                                    <img src="images/register-assets/upload-files.png" alt=""
                                                        class="DropIcon" />

                                                    <input type="file" name="photo" wire:model="photo">
                                                </div>
                                                <div class="parawrap">
                                                    <p class="fileNames">File Chosen : No File Chosen </p>
                                                    <p class="fileName">Profile Picture </p>
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mb-5">
                        <button type="button" class="btn btn-white-fill prevScreen prev"
                            wire:click="decreaseStep()">
                            < Back</button>
                                <button type="submit" class="btn btn-purple-fill " wire:click="register()">
                                    Sign Up
                                </button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{-- </form> --}}
</div>


<script>
    function setupEditor(editor) {
        editor.on('init change', function() {
            editor.save();
        });
        editor.on('change', function(e) {
            @this.set('detail', editor.getContent());
        });
    }
</script>
