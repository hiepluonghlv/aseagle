var cat_mapping={"1":"AGRICULTURE","2":"GRAIN","3":"RICE","4":"ARBORIO RICE","5":"BARLEY","6":"BUCKWHEAT","7":"CALROSE RICE","8":"CORN","9":"YELLOW CORN","10":"WHITE CORN","11":"MILLET","12":"OATS","13":"WHEAT","14":"RYE","15":"SHORGUM","16":"QUINOA","17":"ORGANIC GRAIN","18":"BASMATI RICE","19":"BLACK RICE","20":"ORGANIC RICE","21":"JASMINE RICE","22":"GLUTINOUS RICE","23":"INDICA RICE","24":"JAPONICA RICE","25":"AROMATIC RICE","26":"PARBOILED RICE","27":"GRAIN PRODUCTS","28":"CEREAL","29":"CHINESE SNACK","30":"COARSE CEREAL PRODUCTS","31":"FLOUR","32":"GLUTEN","33":"NOODLES","34":"PASTA","35":"RICE NOODLES","36":"STARCH","37":"FRUIT","38":"FRESH FRUITS","39":"FRESH BANANAS","40":"FRESH CITRUS FRUIT","41":"FRESH PEARS","42":"FRESH MANGOS","43":"FRESH  APPLES","44":"FRESH APRICOTS","45":"FRESH AVOCADOS","46":"FRESH BERRIES","47":"FRESH CHERRIES","48":"FRESH COCONUTS","49":"FRESH GRAPES","50":"FRESH PEACHES","51":"FRESH MELONS","52":"FRESH KIWI FRUIT","53":"FRESH PLUMS","54":"FRESH GUAVA","55":"FRESH OLIVES","56":"FRESH POMEGRANATES","57":"FRESH PINEAPPLES","58":"FRESH DRAGON FRUIT","59":"FRESH DURIANS","60":"FRESH PAPAYAS","61":"FRESH DATES","62":"FRESH WATER MELONS","63":"FRESH LEMONS","64":"FRESH ORANGES","65":"FRESH MANGOSTEEN","66":"FRESH RAMBUTAN","67":"FRESH LYCHEE","68":"FRESH POMELO","69":"ORGANIC FRUITS","70":"CANNED FRUITS","71":"DRIED FRUITS","72":"FROZEN FRUITS","73":"PRESERVED FRUITS",};
var cat_col_mapping={"3":[{"n":"Product Type","rq":false,"rstr":"null","def_v":[]},{"n":"Place of Origin","rq":false,"rstr":"null","def_v":[]},{"n":"Brand Name","rq":false,"rstr":"null","def_v":[]},{"n":"Model Number","rq":false,"rstr":"null","def_v":[]},{"n":"Packaging","rq":false,"rstr":"null","def_v":[]},{"n":"Texture","rq":false,"rstr":"null","def_v":["9","10"]},{"n":"Color","rq":false,"rstr":"null","def_v":["11","12","13","14","15","16","17"]},{"n":"Cultivation Type","rq":false,"rstr":"null","def_v":["18","19","20","21"]},{"n":"Gluten (Wet Bases)","rq":false,"rstr":"null","def_v":[]},{"n":"Moisture (%)","rq":false,"rstr":"null","def_v":[]},{"n":"Style","rq":false,"rstr":"null","def_v":["24","25","26"]},{"n":"Certification","rq":false,"rstr":"null","def_v":[]},{"n":"Weight","rq":false,"rstr":"null","def_v":[]},{"n":"Drying Process","rq":false,"rstr":"null","def_v":[]},{"n":"Broken Ratio","rq":false,"rstr":"null","def_v":[]},{"n":"Crop Year","rq":false,"rstr":"null","def_v":[]},{"n":"Free sample","rq":false,"rstr":"null","def_v":["32","33"]}],"4":[{"n":"Product Type","rq":false,"rstr":"null","def_v":[]},{"n":"Place of Origin","rq":false,"rstr":"null","def_v":[]},{"n":"Brand Name","rq":false,"rstr":"null","def_v":[]},{"n":"Model Number","rq":false,"rstr":"null","def_v":[]},{"n":"Packaging","rq":false,"rstr":"null","def_v":[]},{"n":"Texture","rq":false,"rstr":"null","def_v":["40","41"]},{"n":"Color","rq":false,"rstr":"null","def_v":["42","43","44","45","46","47","48"]},{"n":"Cultivation Type","rq":false,"rstr":"null","def_v":["49","50","51","52"]},{"n":"Gluten (Wet Bases)","rq":false,"rstr":"null","def_v":[]},{"n":"Moisture (%)","rq":false,"rstr":"null","def_v":[]},{"n":"Style","rq":false,"rstr":"null","def_v":["55","56","57"]},{"n":"Certification","rq":false,"rstr":"null","def_v":[]},{"n":"Weight","rq":false,"rstr":"null","def_v":[]},{"n":"Drying Process","rq":false,"rstr":"null","def_v":[]},{"n":"Broken Ratio","rq":false,"rstr":"null","def_v":[]},{"n":"Crop Year","rq":false,"rstr":"null","def_v":[]},{"n":"Free sample","rq":false,"rstr":"null","def_v":["63","64"]}],"5":[{"n":"Product Type","rq":false,"rstr":"null","def_v":[]},{"n":"Place of Origin","rq":false,"rstr":"null","def_v":[]},{"n":"Brand Name","rq":false,"rstr":"null","def_v":[]},{"n":"Model Number","rq":false,"rstr":"null","def_v":[]},{"n":"Packaging","rq":false,"rstr":"null","def_v":[]},{"n":"Texture","rq":false,"rstr":"null","def_v":["71","72"]},{"n":"Color","rq":false,"rstr":"null","def_v":["73","74","75","76","77","78","79"]},{"n":"Cultivation Type","rq":false,"rstr":"null","def_v":["80","81","82","83"]},{"n":"Gluten (Wet Bases)","rq":false,"rstr":"null","def_v":[]},{"n":"Moisture (%)","rq":false,"rstr":"null","def_v":[]},{"n":"Style","rq":false,"rstr":"null","def_v":["86","87","88"]},{"n":"Certification","rq":false,"rstr":"null","def_v":[]},{"n":"Weight","rq":false,"rstr":"null","def_v":[]},{"n":"Drying Process","rq":false,"rstr":"null","def_v":[]},{"n":"Broken Ratio","rq":false,"rstr":"null","def_v":[]},{"n":"Crop Year","rq":false,"rstr":"null","def_v":[]},{"n":"Free sample","rq":false,"rstr":"null","def_v":["94","95"]}],"6":[{"n":"Product Type","rq":false,"rstr":"null","def_v":[]},{"n":"Place of Origin","rq":false,"rstr":"null","def_v":[]},{"n":"Brand Name","rq":false,"rstr":"null","def_v":[]},{"n":"Model Number","rq":false,"rstr":"null","def_v":[]},{"n":"Packaging","rq":false,"rstr":"null","def_v":[]},{"n":"Texture","rq":false,"rstr":"null","def_v":["102","103"]},{"n":"Color","rq":false,"rstr":"null","def_v":["104","105","106","107","108","109","110"]},{"n":"Cultivation Type","rq":false,"rstr":"null","def_v":["111","112","113","114"]},{"n":"Gluten (Wet Bases)","rq":false,"rstr":"null","def_v":[]},{"n":"Moisture (%)","rq":false,"rstr":"null","def_v":[]},{"n":"Style","rq":false,"rstr":"null","def_v":["117","118","119"]},{"n":"Certification","rq":false,"rstr":"null","def_v":[]},{"n":"Weight","rq":false,"rstr":"null","def_v":[]},{"n":"Drying Process","rq":false,"rstr":"null","def_v":[]},{"n":"Broken Ratio","rq":false,"rstr":"null","def_v":[]},{"n":"Crop Year","rq":false,"rstr":"null","def_v":[]},{"n":"Free sample","rq":false,"rstr":"null","def_v":["125","126"]}],"7":[{"n":"Product Type","rq":false,"rstr":"null","def_v":[]},{"n":"Place of Origin","rq":false,"rstr":"null","def_v":[]},{"n":"Brand Name","rq":false,"rstr":"null","def_v":[]},{"n":"Model Number","rq":false,"rstr":"null","def_v":[]},{"n":"Packaging","rq":false,"rstr":"null","def_v":[]},{"n":"Texture","rq":false,"rstr":"null","def_v":["133","134"]},{"n":"Color","rq":false,"rstr":"null","def_v":["135","136","137","138","139","140","141"]},{"n":"Cultivation Type","rq":false,"rstr":"null","def_v":["142","143","144","145"]},{"n":"Gluten (Wet Bases)","rq":false,"rstr":"null","def_v":[]},{"n":"Moisture (%)","rq":false,"rstr":"null","def_v":[]},{"n":"Style","rq":false,"rstr":"null","def_v":["148","149","150"]},{"n":"Certification","rq":false,"rstr":"null","def_v":[]},{"n":"Weight","rq":false,"rstr":"null","def_v":[]},{"n":"Drying Process","rq":false,"rstr":"null","def_v":[]},{"n":"Broken Ratio","rq":false,"rstr":"null","def_v":[]},{"n":"Crop Year","rq":false,"rstr":"null","def_v":[]},{"n":"Free sample","rq":false,"rstr":"null","def_v":["156","157"]}],"8":[{"n":"Product Type","rq":false,"rstr":"null","def_v":[]},{"n":"Place of Origin","rq":false,"rstr":"null","def_v":[]},{"n":"Brand Name","rq":false,"rstr":"null","def_v":[]},{"n":"Model Number","rq":false,"rstr":"null","def_v":[]},{"n":"Packaging","rq":false,"rstr":"null","def_v":[]},{"n":"Texture","rq":false,"rstr":"null","def_v":["164","165"]},{"n":"Color","rq":false,"rstr":"null","def_v":["166","167","168","169","170","171","172"]},{"n":"Cultivation Type","rq":false,"rstr":"null","def_v":["173","174","175","176"]},{"n":"Gluten (Wet Bases)","rq":false,"rstr":"null","def_v":[]},{"n":"Moisture (%)","rq":false,"rstr":"null","def_v":[]},{"n":"Style","rq":false,"rstr":"null","def_v":["179","180","181"]},{"n":"Certification","rq":false,"rstr":"null","def_v":[]},{"n":"Weight","rq":false,"rstr":"null","def_v":[]},{"n":"Drying Process","rq":false,"rstr":"null","def_v":[]},{"n":"Broken Ratio","rq":false,"rstr":"null","def_v":[]},{"n":"Crop Year","rq":false,"rstr":"null","def_v":[]},{"n":"Free sample","rq":false,"rstr":"null","def_v":["187","188"]}],"9":[{"n":"Product Type","rq":false,"rstr":"null","def_v":[]},{"n":"Place of Origin","rq":false,"rstr":"null","def_v":[]},{"n":"Brand Name","rq":false,"rstr":"null","def_v":[]},{"n":"Model Number","rq":false,"rstr":"null","def_v":[]},{"n":"Packaging","rq":false,"rstr":"null","def_v":[]},{"n":"Texture","rq":false,"rstr":"null","def_v":["195","196"]},{"n":"Color","rq":false,"rstr":"null","def_v":["197","198","199","200","201","202","203"]},{"n":"Cultivation Type","rq":false,"rstr":"null","def_v":["204","205","206","207"]},{"n":"Gluten (Wet Bases)","rq":false,"rstr":"null","def_v":[]},{"n":"Moisture (%)","rq":false,"rstr":"null","def_v":[]},{"n":"Style","rq":false,"rstr":"null","def_v":["210","211","212"]},{"n":"Certification","rq":false,"rstr":"null","def_v":[]},{"n":"Weight","rq":false,"rstr":"null","def_v":[]},{"n":"Drying Process","rq":false,"rstr":"null","def_v":[]},{"n":"Broken Ratio","rq":false,"rstr":"null","def_v":[]},{"n":"Crop Year","rq":false,"rstr":"null","def_v":[]},{"n":"Free sample","rq":false,"rstr":"null","def_v":["218","219"]}],"39":[{"n":"Product Type","rq":false,"rstr":"null","def_v":[]},{"n":"Place of Origin","rq":false,"rstr":"null","def_v":[]},{"n":"Brand Name","rq":false,"rstr":"null","def_v":[]},{"n":"Model Number","rq":false,"rstr":"null","def_v":[]},{"n":"Packaging","rq":false,"rstr":"null","def_v":[]},{"n":"Color","rq":false,"rstr":"null","def_v":["227","228","229","230","231","232"]},{"n":"Variety","rq":false,"rstr":"null","def_v":["233","234","235","236","237","238","239","240","241"]},{"n":"Maturity","rq":false,"rstr":"null","def_v":[]},{"n":"Weight (kg)","rq":false,"rstr":"null","def_v":[]},{"n":"Style","rq":false,"rstr":"null","def_v":[]},{"n":"Cultivation Type","rq":false,"rstr":"null","def_v":["245","246","247","248"]},{"n":"Grade","rq":false,"rstr":"null","def_v":[]},{"n":"Size (cm):","rq":false,"rstr":"null","def_v":[]},{"n":"Certification","rq":false,"rstr":"null","def_v":[]},{"n":"Taste","rq":false,"rstr":"null","def_v":[]},{"n":"Packaging","rq":false,"rstr":"null","def_v":[]},{"n":"Shelf Life","rq":false,"rstr":"null","def_v":[]},{"n":"Drying Process","rq":false,"rstr":"null","def_v":[]},{"n":"Harvest","rq":false,"rstr":"null","def_v":[]},{"n":"Free sample","rq":false,"rstr":"null","def_v":["257","258"]}],"40":[{"n":"Product Type","rq":false,"rstr":"null","def_v":[]},{"n":"Place of Origin","rq":false,"rstr":"null","def_v":[]},{"n":"Brand Name","rq":false,"rstr":"null","def_v":[]},{"n":"Model Number","rq":false,"rstr":"null","def_v":[]},{"n":"Packaging","rq":false,"rstr":"null","def_v":[]},{"n":"Color","rq":false,"rstr":"null","def_v":[]},{"n":"Variety","rq":false,"rstr":"null","def_v":[]},{"n":"Maturity","rq":false,"rstr":"null","def_v":[]},{"n":"Weight (kg)","rq":false,"rstr":"null","def_v":[]},{"n":"Style","rq":false,"rstr":"null","def_v":[]},{"n":"Cultivation Type","rq":false,"rstr":"null","def_v":["270","271","272","273"]},{"n":"Grade","rq":false,"rstr":"null","def_v":[]},{"n":"Size (cm):","rq":false,"rstr":"null","def_v":[]},{"n":"Certification","rq":false,"rstr":"null","def_v":[]},{"n":"Taste","rq":false,"rstr":"null","def_v":[]},{"n":"Packaging","rq":false,"rstr":"null","def_v":[]},{"n":"Shelf Life","rq":false,"rstr":"null","def_v":[]},{"n":"Drying Process","rq":false,"rstr":"null","def_v":[]},{"n":"Harvest","rq":false,"rstr":"null","def_v":[]},{"n":"Free sample","rq":false,"rstr":"null","def_v":["282","283"]}]};
var cat_col_defaultvalue_mapping={"9":"Hard","10":"Soft","11":"Black","12":"Brown","13":"Jasmine","14":"Mottled","15":"Red","16":"White","17":"Yellow","18":"Other","19":"Common","20":"GMO","21":"Organic","24":"Dried","25":"Fresh","26":"Frozen","32":"Yes","33":"No","40":"Hard","41":"Soft","42":"Black","43":"Brown","44":"Jasmine","45":"Mottled","46":"Red","47":"White","48":"Yellow","49":"Other","50":"Common","51":"GMO","52":"Organic","55":"Dried","56":"Fresh","57":"Frozen","63":"Yes","64":"No","71":"Hard","72":"Soft","73":"Black","74":"Brown","75":"Jasmine","76":"Mottled","77":"Red","78":"White","79":"Yellow","80":"Other","81":"Common","82":"GMO","83":"Organic","86":"Dried","87":"Fresh","88":"Frozen","94":"Yes","95":"No","102":"Hard","103":"Soft","104":"Black","105":"Brown","106":"Jasmine","107":"Mottled","108":"Red","109":"White","110":"Yellow","111":"Other","112":"Common","113":"GMO","114":"Organic","117":"Dried","118":"Fresh","119":"Frozen","125":"Yes","126":"No","133":"Hard","134":"Soft","135":"Black","136":"Brown","137":"Jasmine","138":"Mottled","139":"Red","140":"White","141":"Yellow","142":"Other","143":"Common","144":"GMO","145":"Organic","148":"Dried","149":"Fresh","150":"Frozen","156":"Yes","157":"No","164":"Hard","165":"Soft","166":"Black","167":"Brown","168":"Jasmine","169":"Mottled","170":"Red","171":"White","172":"Yellow","173":"Other","174":"Common","175":"GMO","176":"Organic","179":"Dried","180":"Fresh","181":"Frozen","187":"Yes","188":"No","195":"Hard","196":"Soft","197":"Black","198":"Brown","199":"Jasmine","200":"Mottled","201":"Red","202":"White","203":"Yellow","204":"Other","205":"Common","206":"GMO","207":"Organic","210":"Dried","211":"Fresh","212":"Frozen","218":"Yes","219":"No","227":"Other","228":"Green","229":"Mottled","230":"Red","231":"White","232":"Yellow","233":"Other","234":"Baby Banana","235":"Cavendish Banana","236":"Common","237":"Dwarf Banana","238":"Manzano Banana","239":"Plantain Banana","240":"Red Banana","241":"Wild Banana","245":"Other","246":"Common","247":"GMO","248":"Organic","257":"Yes","258":"No","270":"Other","271":"Common","272":"GMO","273":"Organic","282":"Yes","283":"No",};
var country_mapping={"1":{"n":"Afghanistan", "r" : "MIE"},"2":{"n":"Albania", "r" : "EUR"},"3":{"n":"Algeria", "r" : "AFR"},"4":{"n":"Andorra", "r" : "EUR"},"5":{"n":"Angola", "r" : "AFR"},"6":{"n":"Antigua and Barbuda", "r" : "SAM"},"7":{"n":"Argentina", "r" : "SAM"},"8":{"n":"Armenia", "r" : "EUR"},"9":{"n":"Aruba", "r" : "SAM"},"10":{"n":"Australia", "r" : "OCN"},"11":{"n":"Austria", "r" : "EUR"},"12":{"n":"Azerbaijan", "r" : "CEA"},"13":{"n":"Bahamas, The", "r" : "SAM"},"14":{"n":"Bahrain", "r" : "MIE"},"15":{"n":"Bangladesh", "r" : "SAS"},"16":{"n":"Barbados", "r" : "SAM"},"17":{"n":"Belarus", "r" : "EUR"},"18":{"n":"Belgium", "r" : "EUR"},"19":{"n":"Belize", "r" : "SAM"},"20":{"n":"Benin", "r" : "AFR"},"21":{"n":"Bhutan", "r" : "SAS"},"22":{"n":"Bolivia", "r" : "EUR"},"23":{"n":"Bosnia and Herzegovina", "r" : "EUR"},"24":{"n":"Botswana", "r" : "AFR"},"25":{"n":"Brazil", "r" : "SAM"},"26":{"n":"Brunei ", "r" : "ASE"},"27":{"n":"Bulgaria", "r" : "EUR"},"28":{"n":"Burkina Faso", "r" : "AFR"},"29":{"n":"Burma", "r" : "ASE"},"30":{"n":"Burundi", "r" : "AFR"},"31":{"n":"Cambodia", "r" : "ASE"},"32":{"n":"Cameroon", "r" : "AFR"},"33":{"n":"Canada", "r" : "NAM"},"34":{"n":"Cape Verde", "r" : "AFR"},"35":{"n":"Central African Republic", "r" : "AFR"},"36":{"n":"Chad", "r" : "AFR"},"37":{"n":"Chile", "r" : "SAM"},"38":{"n":"China", "r" : "EAS"},"39":{"n":"Colombia", "r" : "SAM"},"40":{"n":"Comoros", "r" : "AFR"},"41":{"n":"Congo, Democratic Republic of the", "r" : "AFR"},"42":{"n":"Congo, Republic of the", "r" : "AFR"},"43":{"n":"Costa Rica", "r" : "SAM"},"44":{"n":"Cote d'Ivoire", "r" : "AFR"},"45":{"n":"Croatia", "r" : "EUR"},"46":{"n":"Cuba", "r" : "SAM"},"47":{"n":"Curacao", "r" : "SAM"},"48":{"n":"Cyprus", "r" : "EUR"},"49":{"n":"Czech Republic", "r" : "EUR"},"50":{"n":"Denmark", "r" : "EUR"},"51":{"n":"Djibouti", "r" : "AFR"},"52":{"n":"Dominica", "r" : "SAM"},"53":{"n":"Dominican Republic", "r" : "SAM"},"54":{"n":"East Timor (see Timor-Leste)", "r" : "ASE"},"55":{"n":"Ecuador", "r" : "SAM"},"56":{"n":"Egypt", "r" : "MIE"},"57":{"n":"El Salvador", "r" : "SAM"},"58":{"n":"Equatorial Guinea", "r" : "AFR"},"59":{"n":"Eritrea", "r" : "AFR"},"60":{"n":"Estonia", "r" : "EUR"},"61":{"n":"Ethiopia", "r" : "AFR"},"62":{"n":"Fiji", "r" : "OCN"},"63":{"n":"Finland", "r" : "EUR"},"64":{"n":"France", "r" : "EUR"},"65":{"n":"Gabon", "r" : "AFR"},"66":{"n":"Gambia, The", "r" : "AFR"},"67":{"n":"Georgia", "r" : "EUR"},"68":{"n":"Germany", "r" : "EUR"},"69":{"n":"Ghana", "r" : "AFR"},"70":{"n":"Greece", "r" : "EUR"},"71":{"n":"Grenada", "r" : "SAM"},"72":{"n":"Guatemala", "r" : "SAM"},"73":{"n":"Guinea", "r" : "AFR"},"74":{"n":"Guinea-Bissau", "r" : "AFR"},"75":{"n":"Guyana", "r" : "SAM"},"76":{"n":"Haiti", "r" : "AFR"},"77":{"n":"Holy See", "r" : "EUR"},"78":{"n":"Honduras", "r" : "SAM"},"79":{"n":"Hong Kong", "r" : "EAS"},"80":{"n":"Hungary", "r" : "EUR"},"81":{"n":"Iceland", "r" : "EUR"},"82":{"n":"India", "r" : "SAS"},"83":{"n":"Indonesia", "r" : "ASE"},"84":{"n":"Iran", "r" : "MIE"},"85":{"n":"Iraq", "r" : "MIE"},"86":{"n":"Ireland", "r" : "EUR"},"87":{"n":"Israel", "r" : "MIE"},"88":{"n":"Italy", "r" : "EUR"},"89":{"n":"Jamaica", "r" : "SAM"},"90":{"n":"Japan", "r" : "EAS"},"91":{"n":"Jordan", "r" : "AFR"},"92":{"n":"Kazakhstan", "r" : "CEA"},"93":{"n":"Kenya", "r" : "AFR"},"94":{"n":"Kiribati", "r" : "OCN"},"95":{"n":"Korea, North", "r" : "EAS"},"96":{"n":"Korea, South", "r" : "EAS"},"97":{"n":"Kosovo", "r" : "EUR"},"98":{"n":"Kuwait", "r" : "MIE"},"99":{"n":"Kyrgyzstan", "r" : "CEA"},"100":{"n":"Laos", "r" : "ASE"},"101":{"n":"Latvia", "r" : "EUR"},"102":{"n":"Lebanon", "r" : "MIE"},"103":{"n":"Lesotho", "r" : "AFR"},"104":{"n":"Liberia", "r" : "AFR"},"105":{"n":"Libya", "r" : "MIE"},"106":{"n":"Liechtenstein", "r" : "EUR"},"107":{"n":"Lithuania", "r" : "EUR"},"108":{"n":"Luxembourg", "r" : "EUR"},"109":{"n":"Macau", "r" : "EAS"},"110":{"n":"Macedonia", "r" : "EUR"},"111":{"n":"Madagascar", "r" : "AFR"},"112":{"n":"Malawi", "r" : "AFR"},"113":{"n":"Malaysia", "r" : "ASE"},"114":{"n":"Maldives", "r" : "SAS"},"115":{"n":"Mali", "r" : "AFR"},"116":{"n":"Malta", "r" : "EUR"},"117":{"n":"Marshall Islands", "r" : "OCN"},"118":{"n":"Mauritania", "r" : "AFR"},"119":{"n":"Mauritius", "r" : "AFR"},"120":{"n":"Mexico", "r" : "NAM"},"121":{"n":"Micronesia", "r" : "OCN"},"122":{"n":"Moldova", "r" : "EUR"},"123":{"n":"Monaco", "r" : "EUR"},"124":{"n":"Mongolia", "r" : "CEA"},"125":{"n":"Montenegro", "r" : "EUR"},"126":{"n":"Morocco", "r" : "AFR"},"127":{"n":"Mozambique", "r" : "AFR"},"128":{"n":"Namibia", "r" : "AFR"},"129":{"n":"Nauru", "r" : "OCN"},"130":{"n":"Nepal", "r" : "SAS"},"131":{"n":"Netherlands", "r" : "EUR"},"132":{"n":"Netherlands Antilles", "r" : "SAM"},"133":{"n":"New Zealand", "r" : "OCN"},"134":{"n":"Nicaragua", "r" : "SAM"},"135":{"n":"Niger", "r" : "AFR"},"136":{"n":"Nigeria", "r" : "AFR"},"137":{"n":"North Korea", "r" : "EAS"},"138":{"n":"Norway", "r" : "EUR"},"139":{"n":"Oman", "r" : "MIE"},"140":{"n":"Pakistan", "r" : "SAS"},"141":{"n":"Palau", "r" : "OCN"},"142":{"n":"Palestinian Territories", "r" : "MIE"},"143":{"n":"Panama", "r" : "SAM"},"144":{"n":"Papua New Guinea", "r" : "OCN"},"145":{"n":"Paraguay", "r" : "SAM"},"146":{"n":"Peru", "r" : "SAM"},"147":{"n":"Philippines", "r" : "ASE"},"148":{"n":"Poland", "r" : "EUR"},"149":{"n":"Portugal", "r" : "EUR"},"150":{"n":"Qatar", "r" : "MIE"},"151":{"n":"Romania", "r" : "EUR"},"152":{"n":"Russia", "r" : "EUR"},"153":{"n":"Rwanda", "r" : "AFR"},"154":{"n":"Saint Kitts and Nevis", "r" : "SAM"},"155":{"n":"Saint Lucia", "r" : "SAM"},"156":{"n":"Saint Vincent and the Grenadines", "r" : "SAM"},"157":{"n":"Samoa ", "r" : "OCN"},"158":{"n":"San Marino", "r" : "EUR"},"159":{"n":"Sao Tome and Principe", "r" : "AFR"},"160":{"n":"Saudi Arabia", "r" : "MIE"},"161":{"n":"Senegal", "r" : "AFR"},"162":{"n":"Serbia", "r" : "EUR"},"163":{"n":"Seychelles", "r" : "AFR"},"164":{"n":"Sierra Leone", "r" : "AFR"},"165":{"n":"Singapore", "r" : "ASE"},"166":{"n":"Sint Maarten", "r" : "SAM"},"167":{"n":"Slovakia", "r" : "EUR"},"168":{"n":"Slovenia", "r" : "EUR"},"169":{"n":"Solomon Islands", "r" : "OCN"},"170":{"n":"Somalia", "r" : "AFR"},"171":{"n":"South Africa", "r" : "AFR"},"172":{"n":"South Korea", "r" : "EAS"},"173":{"n":"South Sudan", "r" : "AFR"},"174":{"n":"Spain ", "r" : "EUR"},"175":{"n":"Sri Lanka", "r" : "SAS"},"176":{"n":"Sudan", "r" : "AFR"},"177":{"n":"Suriname", "r" : "SAM"},"178":{"n":"Swaziland ", "r" : "AFR"},"179":{"n":"Sweden", "r" : "EUR"},"180":{"n":"Switzerland", "r" : "EUR"},"181":{"n":"Syria", "r" : "MIE"},"182":{"n":"Taiwan", "r" : "EAS"},"183":{"n":"Tajikistan", "r" : "CEA"},"184":{"n":"Tanzania", "r" : "AFR"},"185":{"n":"Thailand ", "r" : "ASE"},"186":{"n":"Timor-Leste", "r" : "ASE"},"187":{"n":"Togo", "r" : "AFR"},"188":{"n":"Tonga", "r" : "OCN"},"189":{"n":"Trinidad and Tobago", "r" : "AFR"},"190":{"n":"Tunisia", "r" : "AFR"},"191":{"n":"Turkey", "r" : "EUR"},"192":{"n":"Turkmenistan", "r" : "CEA"},"193":{"n":"Tuvalu", "r" : "OCN"},"194":{"n":"Uganda", "r" : "AFR"},"195":{"n":"Ukraine", "r" : "EUR"},"196":{"n":"United Arab Emirates", "r" : "MIE"},"197":{"n":"United Kingdom", "r" : "EUR"},"198":{"n":"Uruguay", "r" : "SAM"},"199":{"n":"Uzbekistan", "r" : "CEA"},"200":{"n":"Vanuatu", "r" : "OCN"},"201":{"n":"Venezuela", "r" : "SAM"},"202":{"n":"Vietnam", "r" : "ASE"},"203":{"n":"Yemen", "r" : "AFR"},"204":{"n":"Zambia", "r" : "AFR"},"205":{"n":"Zimbabwe", "r" : "AFR"},};
var region_mapping = {"ASE" : "South East Asia","EAS" : "East Asia","SAS" : "South Asia","CEA" : "Central Asia","MIE" : "Midle East","OCN" : "Ocean","AFR" : "Africa","EUR" : "Europe","NAM" : "North America","SAM" : "South America"};
