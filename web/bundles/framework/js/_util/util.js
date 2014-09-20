
var _AsgUtil = {};


_AsgUtil.Mapping = ( function() {
	var pub = {};
	
	pub.getColumnName = function (cat_id, key) {
		return cat_col_mapping[cat_id][key].n;
	}

	pub.getDefaultValueArray = function (cat_id, key) {
		return cat_col_mapping[cat_id][key].def_v;
	}

	pub.getRegionName = function (key) {
		return region_mapping[key];
	}

	pub.getCountryName = function (key) {
		return country_mapping[key].n;
	}

	pub.getCountryRegion = function (key) {
		return country_mapping[key].r;
	}

	pub.getCategoryName = function (key) {
		return cat_mapping[key];
	}
	
	return pub;
})();