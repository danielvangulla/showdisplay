        var bounds = null;
            

            var map4 = L.map(
                                  'map4',
                                  {center: [1.4875989,124.8505127],
                                  zoom: 11.5,
                                  maxBounds: bounds,
                                  layers: [],
                                  worldCopyJump: false,
                                  crs: L.CRS.EPSG3857
                                 });
            L.control.scale().addTo(map4);
        
    
            var tile_layer_569f14538fb04c76a45454de6e1dde1a = L.tileLayer(
                'https://cartodb-basemaps-{s}.global.ssl.fastly.net/dark_all/{z}/{x}/{y}.png',
                {
  "attribution": null,
  "detectRetina": false,
  "maxZoom": 18,
  "minZoom": 1,
  "noWrap": false,
  "subdomains": "abc"
}
                ).addTo(map4);
        
    
            var feature_group_660b7a6f937b4a49bef0280873a6a07d = L.featureGroup(
                ).addTo(map4);
        
    

            

                var geo_json_5934e6b3082c45b384e34e17ec31e4af = L.geoJson(
                    {"bbox": [124.85620267444595, 1.4875241816106102, 124.86103047349843, 1.4929373183864825], "features": [{"bbox": [124.85620267444595, 1.4875241816106102, 124.86103047349843, 1.4929373183864825], "geometry": {"coordinates": [[[124.85873830692981, 1.4927022510508738], [124.8588751003864, 1.492610376246976], [124.85892385234976, 1.4925793892783024], [124.85901085266518, 1.4925240914820448], [124.85903579972859, 1.4925093177478725], [124.8591498294017, 1.4924417889923565], [124.85921654532969, 1.492404122981323], [124.85932196630554, 1.492344605142593], [124.8594754783911, 1.4922413009305555], [124.85955629115655, 1.4921842719664349], [124.8596564871963, 1.492113564367787], [124.85975083678902, 1.4920443989086127], [124.85982533197372, 1.4919894302182113], [124.85987341859993, 1.4919441914682812], [124.85990799249014, 1.491916928872764], [124.85993562259061, 1.4918989254422763], [124.85994451185162, 1.491893133310121], [124.86000641946077, 1.4918589633698307], [124.8600801930798, 1.4918112034949529], [124.86012065743638, 1.4918285053786025], [124.86022301622076, 1.4918722722799094], [124.86025194598909, 1.491891317301131], [124.86028439576845, 1.4919185400375718], [124.86032647380065, 1.4919649074083983], [124.86035610654359, 1.4920089551273905], [124.86038193699548, 1.4920617510416456], [124.86039877758472, 1.4921130481329754], [124.8604014978637, 1.4921403893049283], [124.86038311132212, 1.4922381322214295], [124.86036408389215, 1.4924178726922481], [124.86036136703694, 1.4925506634974703], [124.86037003532687, 1.4926741028452002], [124.86038353996557, 1.4928068102090095], [124.86038596579718, 1.4928257019629916], [124.86039751964557, 1.4929156803436343], [124.86040052488887, 1.4929373183864825], [124.86044695053765, 1.4928782736344868], [124.8606415884754, 1.4928064511861172], [124.86062680585994, 1.4927291001369514], [124.86062572290862, 1.4927095496758087], [124.86061878356323, 1.492584273944846], [124.86063493931852, 1.492429083497739], [124.86075201972879, 1.4918822109151404], [124.8608550546762, 1.4915339886773478], [124.8609133583977, 1.4914163871400739], [124.86095463535312, 1.4912290601662124], [124.86090855443632, 1.4903572908174492], [124.86095368291697, 1.4900950223008285], [124.86101029780879, 1.4895710190741358], [124.86102003054114, 1.489348846284767], [124.86102790918532, 1.4891689979050153], [124.86103047349843, 1.4891104615759376], [124.86100129430763, 1.4888562075824325], [124.86097814639359, 1.4886977613825711], [124.86092608833805, 1.4885500473687012], [124.86086257003083, 1.488431371168485], [124.86080544150363, 1.4883681976133403], [124.86076828123267, 1.4883271052407396], [124.86052810027034, 1.4880865742889344], [124.8605269039452, 1.4880860706980439], [124.86039778033526, 1.487978725771303], [124.86024711574262, 1.487853473040315], [124.8601239642372, 1.4877639116263135], [124.8599686533677, 1.4876654426248426], [124.8598073409264, 1.487587832409721], [124.85973119930014, 1.487558666999308], [124.85967039080458, 1.487535374812222], [124.85959629114767, 1.4875241816106102], [124.85951963164692, 1.4875344275425741], [124.8593690294444, 1.4875860979748479], [124.85935117483896, 1.4875922237491872], [124.85920713603491, 1.4876416423227043], [124.85902564565238, 1.487694609661523], [124.85896515616416, 1.4877217133031864], [124.8589252738515, 1.4877628605030488], [124.85889235546969, 1.487834717245556], [124.85880412164252, 1.4882443316932363], [124.85879882133051, 1.48830648325049], [124.8588016061619, 1.488360572016013], [124.85883693390377, 1.4886164510648054], [124.85889386967499, 1.4888229371892197], [124.85893397453971, 1.4889090679022867], [124.85914914196306, 1.4891930420023267], [124.8593761510396, 1.4894708724518304], [124.85954509341298, 1.4897655159527359], [124.85962639375373, 1.4899738114295864], [124.85964599337566, 1.490054886668556], [124.85965438999939, 1.4901589311393038], [124.85964066604308, 1.4906426105098796], [124.85961204468141, 1.4908528937760654], [124.8595867417124, 1.4909414048186098], [124.85951823108475, 1.4910988480222775], [124.85946577765864, 1.4911868233326866], [124.85941005741721, 1.4912506595592872], [124.85913812899854, 1.4915621959653083], [124.85904424637542, 1.4916360550707906], [124.85893711895235, 1.4916917464703203], [124.85887676031979, 1.491711032925068], [124.85879019251848, 1.4917261947892893], [124.85866272466757, 1.4917366877548688], [124.858532465182, 1.4917474105166517], [124.858426053843, 1.49175001121833], [124.85833578443456, 1.4917522174059887], [124.85802730408426, 1.4917114996648537], [124.85794572677227, 1.4916982340852418], [124.85783209078942, 1.4916712895037156], [124.85769541702032, 1.4916275125814642], [124.85758732432592, 1.491571617958748], [124.85754697086496, 1.4915469219017368], [124.85748810784003, 1.491510898107595], [124.85739467075003, 1.4914537151981357], [124.85732433745513, 1.4914127080474058], [124.85722567054185, 1.4913562493532517], [124.857004720053, 1.4912298181131345], [124.85686740220167, 1.4911401365979533], [124.85672365825722, 1.491033294277822], [124.8565667146324, 1.4909492212414912], [124.85647288902658, 1.4908898131287724], [124.85638019614794, 1.4908098781429213], [124.85623835469714, 1.4909238568686751], [124.85620267444595, 1.4909411108544066], [124.85624473844989, 1.491014114777359], [124.85629754214453, 1.4911605092899773], [124.85636854814561, 1.4913927684004784], [124.85641602217439, 1.4915601676385424], [124.85643505291377, 1.491608930223508], [124.85645926832194, 1.491659127967168], [124.85649236206561, 1.4917128094704435], [124.8565295028083, 1.4917323161416434], [124.85657364665842, 1.4917467736143555], [124.85660188767285, 1.4917523324558346], [124.85661637670917, 1.4917531393991914], [124.85663020911994, 1.4917552327402346], [124.85668779199038, 1.4917558466489858], [124.85670876929817, 1.4917590144972244], [124.85674566350488, 1.4917695881782291], [124.85677528509964, 1.49178322167953], [124.85677747927289, 1.4917847277470795], [124.85677876319883, 1.491785099891098], [124.85678093989878, 1.4917871031001955], [124.85680252002211, 1.4918019155683997], [124.85681160069686, 1.4918131123875047], [124.85681913942054, 1.4918208719087513], [124.85683669328215, 1.4918389398955567], [124.85687472592377, 1.4918891900843054], [124.85687849650002, 1.4918929503597027], [124.85693798275248, 1.4919304125362078], [124.85697501913128, 1.491949502021978], [124.85699160971694, 1.491958053228659], [124.85704815041123, 1.4919812723851347], [124.8571100239998, 1.4920005417759565], [124.85718252287917, 1.4920161191358228], [124.85718355189084, 1.4920163653200007], [124.85724995736322, 1.4920322523862215], [124.85729125061845, 1.492044680762487], [124.85734217827573, 1.4920980775618957], [124.8573907713815, 1.4922128759046365], [124.85746365744683, 1.4923807669213045], [124.8574908200149, 1.4924539540972164], [124.85751084830258, 1.4925242763447866], [124.85752302976057, 1.4925748903308462], [124.85752697975171, 1.4925742481996709], [124.8575530376197, 1.492570012096506], [124.8577309876808, 1.4926081778136924], [124.85794480764635, 1.4926901187554131], [124.85821384608778, 1.492745443693521], [124.85839523429277, 1.4927880104399975], [124.85844665487431, 1.492783546801937], [124.85873830692981, 1.4927022510508738]]], "type": "Polygon"}, "id": "0", "properties": {"Density": 23250.0, "Id": 0, "Kekumuhan": "Kumuh Sedang", "Luas": 0.108, "Penduduk": 2511, "highlight": {}, "style": {}}, "type": "Feature"}], "type": "FeatureCollection"}
                    
                    ).addTo(feature_group_660b7a6f937b4a49bef0280873a6a07d);
                geo_json_5934e6b3082c45b384e34e17ec31e4af.setStyle(function(feature) {return feature.properties.style;});

            
    
            var popup_16833b8faff1437381bef2928cc3a755 = L.popup({maxWidth: '300'});

            
                var html_35217976709345708ec2863d2c6dc68a = $('<div id="html_35217976709345708ec2863d2c6dc68a" style="width: 100.0%; height: 100.0%;">Tingkat Kumuh: <font color=Blue><b><marquee>Kumuh Sedang</marquee></b></font> <br> Kepadatan Penduduk: <b>23250.0</b></div>')[0];
                popup_16833b8faff1437381bef2928cc3a755.setContent(html_35217976709345708ec2863d2c6dc68a);
            

            feature_group_660b7a6f937b4a49bef0280873a6a07d.bindPopup(popup_16833b8faff1437381bef2928cc3a755);
