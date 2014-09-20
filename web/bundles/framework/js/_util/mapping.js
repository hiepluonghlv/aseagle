/*var cat_mapping = {
	"1" : "Argriculture",
	"10" : "Grain",
	"100" : "Rice",
	"101" : "Barley",
	"102" : "Corn",
	"20" : "Fruit",
	"201" : "Fresh Fruit",
	"2001" : "Banana",
	"2002" : "Mango",
	"30" : "test"
};

var cat_col_mapping = { // only leaf node need for mapping. 
		"100" : [{"n" : "col_name_1", "rq" : true, "cdt" : ">10", "def_v" : ["test1", // cat_id <>, col_id <>
	              																"test2"
	              																]}, // cat_id = , col_id=
	              {"n" : "col_name_2", "rq" : true, "cdt" : ">10", "def_v" : ["test1",  // cat_id = , col_id <>
	              																"test2"]},
	              {"n" : "col_name_3", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
	              {"n" : "col_name_4", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
	              {"n" : "col_name_5", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
	              {"n" : "col_name_6", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
	              {"n" : "col_name_7", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
	              {"n" : "col_name_8", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
	              {"n" : "col_name_9", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
	              {"n" : "col_name_10", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
	              {"n" : "col_name_11", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
	              {"n" : "col_name_12", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]}
	              ],
		"101" : [
		              {"n" : "col_name_1", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
		              {"n" : "Cultivate Type", "rq" : true, "cdt" : ">10", "def_v" : ["fresh", "dry", "normal"]},
		              {"n" : "col_name_3", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
		              {"n" : "col_name_4", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
		              {"n" : "col_name_5", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
		              {"n" : "col_name_6", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
		              {"n" : "col_name_7", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
		              {"n" : "col_name_8", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
		              {"n" : "col_name_9", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
		              {"n" : "col_name_10", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
		              {"n" : "col_name_11", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
		              {"n" : "col_name_12", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]}
		              ],
	      "102" : [
		              {"n" : "col_name2_1", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
		              {"n" : "col_name2_2", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
		              {"n" : "col_name2_3", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
		              {"n" : "col_name2_4", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
		              {"n" : "col_name2_5", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
		              {"n" : "col_name2_6", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
		              {"n" : "col_name2_7", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
		              {"n" : "col_name2_8", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
		              {"n" : "col_name2_9", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
		              {"n" : "col_name2_10", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
		              {"n" : "col_name2_11", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
		              {"n" : "col_name2_12", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]}
		              ],
          "2001" : [
		              {"n" : "col_name2_1", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
		              {"n" : "col_name2_2", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
		              {"n" : "col_name2_3", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
		              {"n" : "col_name2_4", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
		              {"n" : "col_name2_5", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
		              {"n" : "col_name2_6", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
		              {"n" : "col_name2_7", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
		              {"n" : "col_name2_8", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
		              {"n" : "col_name2_9", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
		              {"n" : "col_name2_10", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
		              {"n" : "col_name2_11", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]},
		              {"n" : "col_name2_12", "rq" : true, "cdt" : ">10", "def_v" : ["test1", "test2"]}
		              ]
};

var cat_col_defaultvalue_mapping = {

}


var country_mapping = 
{
	"1" : {"n": "Vietnam", "r": "ASE", "province" : []},
	"2" : {"n": "Thailand", "r": "ASE"},
	"3" : {"n": "Singapore", "r": "ASE"},
	"4" : {"n": "China", "r": "EAS"},
	"5" : {"n": "India", "r": "SAS"},
	"6" : {"n": "vietnam", "r": "ASE"},
	"7" : {"n": "Japan", "r": "EAS"},
	"8" : {"n": "vietnam", "r": "ASE"},
	"9" : {"n": "vietnam", "r": "ASE"},
	"10" : {"n": "vietnam", "r": "ASE"},
	"11" : {"n": "vietnam", "r": "ASE"},
	"12" : {"n": "vietnam", "r": "ASE"},
	"13" : {"n": "vietnam", "r": "ASE"},
	"14" : {"n": "vietnam", "r": "ASE"},
	"15" : {"n": "vietnam", "r": "ASE"},
	"16" : {"n": "vietnam", "r": "ASE"},
	"17" : {"n": "vietnam", "r": "ASE"},
	"18" : {"n": "vietnam", "r": "ASE"},
	"19" : {"n": "vietnam", "r": "ASE"},
	"20" : {"n": "vietnam", "r": "ASE"},
	"21" : {"n": "vietnam", "r": "ASE"}
	
};

var region_mapping = {
		"ASE" : "South East Asia",
		"EAS" : "East Asia",
		"SAS" : "South Asia",
		"CEA" : "Central Asia",
		"MIE" : "Midle East",
		"AFR" : "Africa",
		"EUR" : "Europe",
		"NAM" : "North America";
		"SAM" : "South America";
};

var province_mapping = {

}


*/

var _0x3b5f=["\x41\x72\x67\x72\x69\x63\x75\x6C\x74\x75\x72\x65","\x47\x72\x61\x69\x6E","\x52\x69\x63\x65","\x42\x61\x72\x6C\x65\x79","\x43\x6F\x72\x6E","\x46\x72\x75\x69\x74","\x46\x72\x65\x73\x68\x20\x46\x72\x75\x69\x74","\x42\x61\x6E\x61\x6E\x61","\x4D\x61\x6E\x67\x6F","\x74\x65\x73\x74","\x63\x6F\x6C\x5F\x6E\x61\x6D\x65\x5F\x31","\x3E\x31\x30","\x74\x65\x73\x74\x31","\x74\x65\x73\x74\x32","\x63\x6F\x6C\x5F\x6E\x61\x6D\x65\x5F\x32","\x63\x6F\x6C\x5F\x6E\x61\x6D\x65\x5F\x33","\x63\x6F\x6C\x5F\x6E\x61\x6D\x65\x5F\x34","\x63\x6F\x6C\x5F\x6E\x61\x6D\x65\x5F\x35","\x63\x6F\x6C\x5F\x6E\x61\x6D\x65\x5F\x36","\x63\x6F\x6C\x5F\x6E\x61\x6D\x65\x5F\x37","\x63\x6F\x6C\x5F\x6E\x61\x6D\x65\x5F\x38","\x63\x6F\x6C\x5F\x6E\x61\x6D\x65\x5F\x39","\x63\x6F\x6C\x5F\x6E\x61\x6D\x65\x5F\x31\x30","\x63\x6F\x6C\x5F\x6E\x61\x6D\x65\x5F\x31\x31","\x63\x6F\x6C\x5F\x6E\x61\x6D\x65\x5F\x31\x32","\x43\x75\x6C\x74\x69\x76\x61\x74\x65\x20\x54\x79\x70\x65","\x66\x72\x65\x73\x68","\x64\x72\x79","\x6E\x6F\x72\x6D\x61\x6C","\x63\x6F\x6C\x5F\x6E\x61\x6D\x65\x32\x5F\x31","\x63\x6F\x6C\x5F\x6E\x61\x6D\x65\x32\x5F\x32","\x63\x6F\x6C\x5F\x6E\x61\x6D\x65\x32\x5F\x33","\x63\x6F\x6C\x5F\x6E\x61\x6D\x65\x32\x5F\x34","\x63\x6F\x6C\x5F\x6E\x61\x6D\x65\x32\x5F\x35","\x63\x6F\x6C\x5F\x6E\x61\x6D\x65\x32\x5F\x36","\x63\x6F\x6C\x5F\x6E\x61\x6D\x65\x32\x5F\x37","\x63\x6F\x6C\x5F\x6E\x61\x6D\x65\x32\x5F\x38","\x63\x6F\x6C\x5F\x6E\x61\x6D\x65\x32\x5F\x39","\x63\x6F\x6C\x5F\x6E\x61\x6D\x65\x32\x5F\x31\x30","\x63\x6F\x6C\x5F\x6E\x61\x6D\x65\x32\x5F\x31\x31","\x63\x6F\x6C\x5F\x6E\x61\x6D\x65\x32\x5F\x31\x32","\x56\x69\x65\x74\x6E\x61\x6D","\x41\x53\x45","\x54\x68\x61\x69\x6C\x61\x6E\x64","\x53\x69\x6E\x67\x61\x70\x6F\x72\x65","\x43\x68\x69\x6E\x61","\x45\x41\x53","\x49\x6E\x64\x69\x61","\x53\x41\x53","\x76\x69\x65\x74\x6E\x61\x6D","\x4A\x61\x70\x61\x6E","\x53\x6F\x75\x74\x68\x20\x45\x61\x73\x74\x20\x41\x73\x69\x61\x6E","\x45\x61\x73\x74\x20\x41\x73\x69\x61\x6E","\x53\x6F\x75\x74\x68\x20\x41\x73\x69\x61\x6E","\x41\x66\x72\x69\x63\x61"];var cat_mapping={"\x31":_0x3b5f[0],"\x31\x30":_0x3b5f[1],"\x31\x30\x30":_0x3b5f[2],"\x31\x30\x31":_0x3b5f[3],"\x31\x30\x32":_0x3b5f[4],"\x32\x30":_0x3b5f[5],"\x32\x30\x31":_0x3b5f[6],"\x32\x30\x30\x31":_0x3b5f[7],"\x32\x30\x30\x32":_0x3b5f[8],"\x33\x30":_0x3b5f[9]};var cat_col_mapping={"\x31\x30\x30":[{"\x6E":_0x3b5f[10],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[14],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[15],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[16],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[17],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[18],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[19],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[20],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[21],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[22],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[23],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[24],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]}],"\x31\x30\x31":[{"\x6E":_0x3b5f[10],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[25],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[26],_0x3b5f[27],_0x3b5f[28]]},{"\x6E":_0x3b5f[15],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[16],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[17],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[18],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[19],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[20],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[21],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[22],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[23],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[24],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]}],"\x31\x30\x32":[{"\x6E":_0x3b5f[29],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[30],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[31],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[32],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[33],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[34],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[35],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[36],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[37],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[38],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[39],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[40],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]}],"\x32\x30\x30\x31":[{"\x6E":_0x3b5f[29],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[30],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[31],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[32],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[33],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[34],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[35],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[36],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[37],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[38],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[39],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]},{"\x6E":_0x3b5f[40],"\x72\x71":true,"\x63\x64\x74":_0x3b5f[11],"\x64\x65\x66\x5F\x76":[_0x3b5f[12],_0x3b5f[13]]}]};var country_mapping={"\x31":{"\x6E":_0x3b5f[41],"\x72":_0x3b5f[42]},"\x32":{"\x6E":_0x3b5f[43],"\x72":_0x3b5f[42]},"\x33":{"\x6E":_0x3b5f[44],"\x72":_0x3b5f[42]},"\x34":{"\x6E":_0x3b5f[45],"\x72":_0x3b5f[46]},"\x35":{"\x6E":_0x3b5f[47],"\x72":_0x3b5f[48]},"\x36":{"\x6E":_0x3b5f[49],"\x72":_0x3b5f[42]},"\x37":{"\x6E":_0x3b5f[50],"\x72":_0x3b5f[46]},"\x38":{"\x6E":_0x3b5f[49],"\x72":_0x3b5f[42]},"\x39":{"\x6E":_0x3b5f[49],"\x72":_0x3b5f[42]},"\x31\x30":{"\x6E":_0x3b5f[49],"\x72":_0x3b5f[42]},"\x31\x31":{"\x6E":_0x3b5f[49],"\x72":_0x3b5f[42]},"\x31\x32":{"\x6E":_0x3b5f[49],"\x72":_0x3b5f[42]},"\x31\x33":{"\x6E":_0x3b5f[49],"\x72":_0x3b5f[42]},"\x31\x34":{"\x6E":_0x3b5f[49],"\x72":_0x3b5f[42]},"\x31\x35":{"\x6E":_0x3b5f[49],"\x72":_0x3b5f[42]},"\x31\x36":{"\x6E":_0x3b5f[49],"\x72":_0x3b5f[42]},"\x31\x37":{"\x6E":_0x3b5f[49],"\x72":_0x3b5f[42]},"\x31\x38":{"\x6E":_0x3b5f[49],"\x72":_0x3b5f[42]},"\x31\x39":{"\x6E":_0x3b5f[49],"\x72":_0x3b5f[42]},"\x32\x30":{"\x6E":_0x3b5f[49],"\x72":_0x3b5f[42]},"\x32\x31":{"\x6E":_0x3b5f[49],"\x72":_0x3b5f[42]}};var region_mapping={"\x41\x53\x45":_0x3b5f[51],"\x45\x41\x53":_0x3b5f[52],"\x53\x41\x53":_0x3b5f[53],"\x41\x46\x52":_0x3b5f[54]};