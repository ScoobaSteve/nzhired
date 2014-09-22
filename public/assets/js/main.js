function updateArea()
{
	var selectedItem=document.getElementById("location");

	var areaBox=document.getElementById("area");

	if (selectedItem.value == 'Northland')
	{
		removeAllOptions(areaBox);
		areaBox.disabled = false;
		addOption(areaBox,"Far North", "Far North");
		addOption(areaBox,"Kaipara", "Kaipara");
		addOption(areaBox,"Whangarei", "Whangarei");
	}
	if (selectedItem.value == 'Auckland')
	{
		removeAllOptions(areaBox);
		areaBox.disabled = false;
		addOption(areaBox,"Auckland City", "Auckland City");
		addOption(areaBox,"Franklin", "Franklin");
		addOption(areaBox,"Hauraki Gulf Islands", "Hauraki Gulf Islands");
		addOption(areaBox,"Manukau City", "Manukau City");
		addOption(areaBox,"North Shore City", "North Shore City");
		addOption(areaBox,"Papakura", "Papakura");
		addOption(areaBox,"Rodney", "Rodney");
		addOption(areaBox,"Waiheke Island", "Waiheke Island");
		addOption(areaBox,"Waitakere City", "Waitakere City");
	}
	if (selectedItem.value == 'Waikato')
	{
		removeAllOptions(areaBox);
		areaBox.disabled = false;
		addOption(areaBox,"Hamilton", "Hamilton");
		addOption(areaBox,"Hauraki", "Hauraki");
		addOption(areaBox,"Matamata-Piako", "Matamata-Piako");
		addOption(areaBox,"Otorohanga", "Otorohanga");
		addOption(areaBox,"South Waikato", "South Waikato");
		addOption(areaBox,"Taupo", "Taupo");
		addOption(areaBox,"Thames-Coromandel", "Thames-Coromandel");
		addOption(areaBox,"Waikato", "Waikato");
		addOption(areaBox,"Waipa", "Waipa");
		addOption(areaBox,"Waitomo", "Waitomo");
	}
	if (selectedItem.value == 'Bay Of Plenty')
	{
		removeAllOptions(areaBox);
		areaBox.disabled = false;
		addOption(areaBox,"Kawerau", "Kawerau");
		addOption(areaBox,"Opotiki", "Opotiki");
		addOption(areaBox,"Rotorua", "Rotorua");
		addOption(areaBox,"Tauranga", "Tauranga");
		addOption(areaBox,"Western Bay Of Plenty", "Western Bay Of Plenty");
		addOption(areaBox,"Whakatane", "Whakatane");
	}
	if (selectedItem.value == 'Gisborne')
	{
		removeAllOptions(areaBox);
		areaBox.disabled = false;
		addOption(areaBox,"Gisborne", "Gisborne");

	}
	if (selectedItem.value == "Hawke's Bay")
	{
		removeAllOptions(areaBox);
		areaBox.disabled = false;
		addOption(areaBox,"Central Hawke's Bay", "Central Hawke's Bay");
		addOption(areaBox,"Hastings", "Hastings");
		addOption(areaBox,"Napier", "Napier");
		addOption(areaBox,"Wairoa", "Wairoa");
	}
	if (selectedItem.value == 'Taranaki')
	{
		removeAllOptions(areaBox);
		areaBox.disabled = false;
		addOption(areaBox,"New Plymouth", "New Plymouth");
		addOption(areaBox,"South Taranaki", "South Taranaki");
		addOption(areaBox,"Stratford", "Stratford");
	}
	if (selectedItem.value == 'Manawatu / Wanganui')
	{
		removeAllOptions(areaBox);
		areaBox.disabled = false;
		addOption(areaBox,"Horowhenua", "Horowhenua");
		addOption(areaBox,"Manawatu", "Manawatu");
		addOption(areaBox,"Palmerston North", "Palmerston North");
		addOption(areaBox,"Rangitikei", "Rangitikei");
		addOption(areaBox,"Ruapehu", "Ruapehu");
		addOption(areaBox,"Tararua", "Tararua");
		addOption(areaBox,"Wanganui", "Wanganui");
	}
	if (selectedItem.value == 'Wellington')
	{
		removeAllOptions(areaBox);
		areaBox.disabled = false;
		addOption(areaBox,"Carterton", "Carterton");
		addOption(areaBox,"Kapiti Coast", "Kapiti Coast");
		addOption(areaBox,"Lower Hutt", "Lower Hutt");
		addOption(areaBox,"Masterton", "Masterton");
		addOption(areaBox,"Porirua", "Porirua");
		addOption(areaBox,"South Wairarapa", "South Wairarapa");
		addOption(areaBox,"Upper Hutt", "Upper Hutt");
		addOption(areaBox,"Wellington", "Wellington");
	}
	if (selectedItem.value == 'Nelson / Tasman')
	{
		removeAllOptions(areaBox);
		areaBox.disabled = false;
		addOption(areaBox,"Nelson", "Nelson");
		addOption(areaBox,"Tasman", "Tasman");
	}
	if (selectedItem.value == 'Marlborough')
	{
		removeAllOptions(areaBox);
		areaBox.disabled = false;
		addOption(areaBox,"Kaikoura", "Kaikoura");
		addOption(areaBox,"Marlborough", "Marlborough");
	}
	if (selectedItem.value == 'West Coast')
	{
		removeAllOptions(areaBox);
		areaBox.disabled = false;
		addOption(areaBox,"Buller", "Buller");
		addOption(areaBox,"Grey", "Grey");
		addOption(areaBox,"Westland", "Westland");
	}
	if (selectedItem.value == 'Canterbury')
	{
		removeAllOptions(areaBox);
		areaBox.disabled = false;
		addOption(areaBox,"Ashburton", "Ashburton");
		addOption(areaBox,"Banks Peninsula", "Banks Peninsula");
		addOption(areaBox,"Christchurch City", "Christchurch City");
		addOption(areaBox,"Hurunui", "Hurunui");
		addOption(areaBox,"Mackenzie", "Mackenzie");
		addOption(areaBox,"Selwyn", "Selwyn");
		addOption(areaBox,"Timaru", "Timaru");
		addOption(areaBox,"Waimakariri", "Waimakariri");
		addOption(areaBox,"Waimate", "Waimate");
	}
	if (selectedItem.value == 'Otago')
	{
		removeAllOptions(areaBox);
		areaBox.disabled = false;
		addOption(areaBox,"Central Otago", "Central Otago");
		addOption(areaBox,"Clutha", "Clutha");
		addOption(areaBox,"Dunedin", "Dunedin");
		addOption(areaBox,"Queenstown-Lakes", "Queenstown-Lakes");
		addOption(areaBox,"South Otago", "South Otago");
		addOption(areaBox,"Waitaki", "Waitaki");
	}
	if (selectedItem.value == 'Southland')
	{
		removeAllOptions(areaBox);
		areaBox.disabled = false;
		addOption(areaBox,"Catlins", "Catlins");
		addOption(areaBox,"Gore", "Gore");
		addOption(areaBox,"Invercargill", "Invercargill");
		addOption(areaBox,"Southland", "Southland");
	}
}


function updateSub()
{
	var selectedCat=document.getElementById("category");

	var subCatBox=document.getElementById("subCategory");

	if (selectedCat.value == 'Accounting')
	{
		removeAllOptions(subCatBox);
		subCatBox.disabled = false;
		addOption(subCatBox,"Accountants", "Accountants");
		addOption(subCatBox,"Accounts administrators", "Accounts administrators");
		addOption(subCatBox,"Accounts payable", "Accounts payable");
		addOption(subCatBox,"Accounts receivable", "Accounts receivable");
		addOption(subCatBox,"Analysts", "Analysts");
		addOption(subCatBox,"Finance managers & controllers", "Finance managers & controllers");
		addOption(subCatBox,"Management", "Management");
		addOption(subCatBox,"Payroll", "Payroll");
		addOption(subCatBox,"Other", "Other");
	}

	if (selectedCat.value == 'Agriculture, fishing & forestry')
	{
		removeAllOptions(subCatBox);
		subCatBox.disabled = false;
		addOption(subCatBox,"Farming", "Farming");
		addOption(subCatBox,"Fishing", "Fishing");
		addOption(subCatBox,"Forestry", "Forestry");
		addOption(subCatBox,"Horticulture", "Horticulture");
		addOption(subCatBox,"Other", "Other");
	}

	if (selectedCat.value == 'Banking, finance & insurance')
	{
		removeAllOptions(subCatBox);
		subCatBox.disabled = false;
		addOption(subCatBox,"Analysts", "Analysts");
		addOption(subCatBox,"Client services", "Client services");
		addOption(subCatBox,"Corporate & institutional banking", "Corporate & institutional banking");
		addOption(subCatBox,"Credit & lending", "Credit & lending");
		addOption(subCatBox,"Financial planning & investment", "Financial planning & investment");
		addOption(subCatBox,"Insurance", "Insurance");
		addOption(subCatBox,"Management", "Management");
		addOption(subCatBox,"Risk & compliance", "Risk & compliance");
		addOption(subCatBox,"Settlements", "Settlements");
		addOption(subCatBox,"Tellers & branch staff", "Tellers & branch staff");
		addOption(subCatBox,"Other", "Other");
	}

	if (selectedCat.value == 'Construction & architecture')
	{
		removeAllOptions(subCatBox);
		subCatBox.disabled = false;
		addOption(subCatBox,"Architecture", "Architecture");
		addOption(subCatBox,"Drafting", "Drafting");
		addOption(subCatBox,"Estimation", "Estimation");
		addOption(subCatBox,"Interior design", "Interior design");
		addOption(subCatBox,"Labouring", "Labouring");
		addOption(subCatBox,"Machine operators", "Machine operators");
		addOption(subCatBox,"Planning", "Planning");
		addOption(subCatBox,"Project & contracts management", "Project & contracts management");
		addOption(subCatBox,"Quantity surveying", "Quantity surveying");
		addOption(subCatBox,"Site management", "Site management");
		addOption(subCatBox,"Supervisors & forepersons", "Supervisors & forepersons");
		addOption(subCatBox,"Surveying", "Surveying");
		addOption(subCatBox,"Other", "Other");
	}

	if (selectedCat.value == 'Customer service')
	{
		removeAllOptions(subCatBox);
		subCatBox.disabled = false;
		addOption(subCatBox,"Call centre", "Call centre");
		addOption(subCatBox,"Customer-facing", "Customer-facing");
		addOption(subCatBox,"Management", "Management");
		addOption(subCatBox,"Other", "Other");
	}

	if (selectedCat.value == 'Education')
	{
		removeAllOptions(subCatBox);
		subCatBox.disabled = false;
		addOption(subCatBox,"Au pairs & nannies", "Au pairs & nannies");
		addOption(subCatBox,"Early childhood", "Early childhood");
		addOption(subCatBox,"Primary", "Primary");
		addOption(subCatBox,"Secondary", "Secondary");
		addOption(subCatBox,"Tertiary", "Tertiary");
		addOption(subCatBox,"Tutoring & training", "Tutoring & training");
		addOption(subCatBox,"Other", "Other");
	}

	if (selectedCat.value == 'Engineering')
	{
		removeAllOptions(subCatBox);
		subCatBox.disabled = false;
		addOption(subCatBox,"Building services", "Building services");
		addOption(subCatBox,"Civil & structural", "Civil & structural");
		addOption(subCatBox,"Drafting", "Drafting");
		addOption(subCatBox,"Electrical", "Electrical");
		addOption(subCatBox,"Energy", "Energy");
		addOption(subCatBox,"Environmental", "Environmental");
		addOption(subCatBox,"Geotechnical", "Geotechnical");
		addOption(subCatBox,"Industrial", "Industrial");
		addOption(subCatBox,"Maintenance", "Maintenance");
		addOption(subCatBox,"Management", "Management");
		addOption(subCatBox,"Mechanical", "Mechanical");
		addOption(subCatBox,"Project management", "Project management");
		addOption(subCatBox,"Water & waste", "Water & waste");
		addOption(subCatBox,"Other", "Other");
	}

	if (selectedCat.value == 'Executive & general management')
	{
		removeAllOptions(subCatBox);
		subCatBox.disabled = true;
	}

	if (selectedCat.value == 'Government & council')
	{
		removeAllOptions(subCatBox);
		subCatBox.disabled = false;
		addOption(subCatBox,"Central government", "Central government");
		addOption(subCatBox,"Defence", "Defence");
		addOption(subCatBox,"Local & regional council", "Local & regional council");
		addOption(subCatBox,"Other", "Other");
	}

	if (selectedCat.value == 'Healthcare')
	{
		removeAllOptions(subCatBox);
		subCatBox.disabled = false;
		addOption(subCatBox,"Administration", "Administration");
		addOption(subCatBox,"Caregiving", "Caregiving");
		addOption(subCatBox,"Community & social services", "Community & social services");
		addOption(subCatBox,"Dentistry", "Dentistry");
		addOption(subCatBox,"Doctors & specialists", "Doctors & specialists");
		addOption(subCatBox,"Fitness & wellbeing", "Fitness & wellbeing");
		addOption(subCatBox,"Management", "Management");
		addOption(subCatBox,"Nursing & midwifery", "Nursing & midwifery");
		addOption(subCatBox,"Occupational therapy", "Occupational therapy");
		addOption(subCatBox,"Pharmacy", "Pharmacy");
		addOption(subCatBox,"Physiotherapy", "Physiotherapy");
		addOption(subCatBox,"Psychology & counselling", "Psychology & counselling");
		addOption(subCatBox,"Radiography & sonography", "Radiography & sonography");
		addOption(subCatBox,"Veterinary", "Veterinary");
		addOption(subCatBox,"Other", "Other");
	}

	if (selectedCat.value == 'Hospitality & tourism')
	{
		removeAllOptions(subCatBox);
		subCatBox.disabled = false;
		addOption(subCatBox,"Bar staff & baristas", "Bar staff & baristas");
		addOption(subCatBox,"Chefs", "Chefs");
		addOption(subCatBox,"Housekeeping", "Housekeeping");
		addOption(subCatBox,"Kitchen staff", "Kitchen staff");
		addOption(subCatBox,"Management", "Management");
		addOption(subCatBox,"Reception & front desk", "Reception & front desk");
		addOption(subCatBox,"Tourism & tour guides", "Tourism & tour guides");
		addOption(subCatBox,"Travel consultants", "Travel consultants");
		addOption(subCatBox,"Waiting staff", "Waiting staff");
		addOption(subCatBox,"Other", "Other");
	}

	if (selectedCat.value == 'HR & recruitment')
	{
		removeAllOptions(subCatBox);
		subCatBox.disabled = false;
		addOption(subCatBox,"HR", "HR");
		addOption(subCatBox,"Recruitment", "Recruitment");
		addOption(subCatBox,"Other", "Other");
	}

	if (selectedCat.value == 'IT')
	{
		removeAllOptions(subCatBox);
		subCatBox.disabled = false;
		addOption(subCatBox,"Architects", "Architects");
		addOption(subCatBox,"Business & systems analysts", "Business & systems analysts");
		addOption(subCatBox,"Data warehousing & BI", "Data warehousing & BI");
		addOption(subCatBox,"Functional consultants", "Functional consultants");
		addOption(subCatBox,"Management", "Management");
		addOption(subCatBox,"Networking & storage", "Networking & storage");
		addOption(subCatBox,"Programming & development", "Programming & development");
		addOption(subCatBox,"Project management", "Project management");
		addOption(subCatBox,"Sales & pre-sales", "Sales & pre-sales");
		addOption(subCatBox,"Service desk", "Service desk");
		addOption(subCatBox,"Systems engineers", "Systems engineers");
		addOption(subCatBox,"Telecommunications", "Telecommunications");
		addOption(subCatBox,"Testing", "Testing");
		addOption(subCatBox,"Training", "Training");
		addOption(subCatBox,"Web design", "Web design");
		addOption(subCatBox,"Other", "Other");
	}

	if (selectedCat.value == 'Legal')
	{
		removeAllOptions(subCatBox);
		subCatBox.disabled = false;
		addOption(subCatBox,"In-house counsel", "In-house counsel");
		addOption(subCatBox,"Private practice", "Private practice");
		addOption(subCatBox,"Secretarial", "Secretarial");
		addOption(subCatBox,"Other", "Other");
	}

	if (selectedCat.value == 'Manufacturing & operations')
	{
		removeAllOptions(subCatBox);
		subCatBox.disabled = false;
		addOption(subCatBox,"Fitters & machining", "Fitters & machining");
		addOption(subCatBox,"Machine operation", "Machine operation");
		addOption(subCatBox,"Management", "Management");
		addOption(subCatBox,"Process & assembly", "Process & assembly");
		addOption(subCatBox,"Purchasing & inventory", "Purchasing & inventory");
		addOption(subCatBox,"Quality assurance", "Quality assurance");
		addOption(subCatBox,"Storepersons & warehousing", "Storepersons & warehousing");
		addOption(subCatBox,"Supervisors & forepersons", "Supervisors & forepersons");
		addOption(subCatBox,"Other", "Other");
	}

	if (selectedCat.value == 'Marketing, media & communications')
	{
		removeAllOptions(subCatBox);
		subCatBox.disabled = false;
		addOption(subCatBox,"Advertising", "Advertising");
		addOption(subCatBox,"Brand & product management", "Brand & product management");
		addOption(subCatBox,"Communications & PR", "Communications & PR");
		addOption(subCatBox,"Design", "Design");
		addOption(subCatBox,"Digital marketing", "Digital marketing");
		addOption(subCatBox,"Direct marketing", "Direct marketing");
		addOption(subCatBox,"Journalism", "Journalism");
		addOption(subCatBox,"Management", "Management");
		addOption(subCatBox,"Market research & analysis", "Market research & analysis");
		addOption(subCatBox,"Marketing assistants & coordinators", "Marketing assistants & coordinators");
		addOption(subCatBox,"Other", "Other");
	}

	if (selectedCat.value == 'Office & administration')
	{
		removeAllOptions(subCatBox);
		subCatBox.disabled = false;
		addOption(subCatBox,"Administration", "Administration");
		addOption(subCatBox,"Data entry", "Data entry");
		addOption(subCatBox,"EA, PA & secretarial", "EA, PA & secretarial");
		addOption(subCatBox,"Office management", "Office management");
		addOption(subCatBox,"Reception", "Reception");
		addOption(subCatBox,"Other", "Other");

	}

	if (selectedCat.value == 'Property')
	{
		removeAllOptions(subCatBox);
		subCatBox.disabled = false;
		addOption(subCatBox,"Commercial sales & leasing", "Commercial sales & leasing");
		addOption(subCatBox,"Consultancy & valuation", "Consultancy & valuation");
		addOption(subCatBox,"Facilities & commercial property management", "Facilities & commercial property management");
		addOption(subCatBox,"Residential sales & management", "Residential sales & management");
		addOption(subCatBox,"Other", "Other");
	}

	if (selectedCat.value == 'Retail')
	{
		removeAllOptions(subCatBox);
		subCatBox.disabled = false;
		addOption(subCatBox,"Area managers", "Area managers");
		addOption(subCatBox,"Buying", "Buying");
		addOption(subCatBox,"Department managers", "Department managers");
		addOption(subCatBox,"Management", "Management");
		addOption(subCatBox,"Merchandising", "Merchandising");
		addOption(subCatBox,"Retail assistants", "Retail assistants");
		addOption(subCatBox,"Store managers", "Store managers");
		addOption(subCatBox,"Assistant store managers", "Assistant store managers");
		addOption(subCatBox,"Other", "Other");
	}

	if (selectedCat.value == 'Sales')
	{
		removeAllOptions(subCatBox);
		subCatBox.disabled = false;
		addOption(subCatBox,"Account management", "Account management");
		addOption(subCatBox,"Business development manager", "Business development manager");
		addOption(subCatBox,"Sales managers", "Sales managers");
		addOption(subCatBox,"Sales reps", "Sales reps");
		addOption(subCatBox,"Sales support", "Sales support");
		addOption(subCatBox,"Telesales", "Telesales");
		addOption(subCatBox,"Other", "Other");
	}

	if (selectedCat.value == 'Science & technology')
	{
		removeAllOptions(subCatBox);
		subCatBox.disabled = true;
	}

	if (selectedCat.value == 'Trades & services')
	{
		removeAllOptions(subCatBox);
		subCatBox.disabled = false;
		addOption(subCatBox,"Air con. & refrigeration", "Air con. & refrigeration");
		addOption(subCatBox,"Automotive trades", "Automotive trades");
		addOption(subCatBox,"Beautician", "Beautician");
		addOption(subCatBox,"Boat building", "Boat building");
		addOption(subCatBox,"Boilermakers & welders", "Boilermakers & welders");
		addOption(subCatBox,"Building & carpentry", "Building & carpentry");
		addOption(subCatBox,"Butchers & bakers", "Butchers & bakers");
		addOption(subCatBox,"Cleaning", "Cleaning");
		addOption(subCatBox,"Electrical", "Electrical");
		addOption(subCatBox,"Flooring", "Flooring");
		addOption(subCatBox,"Gardening & landscaping", "Gardening & landscaping");
		addOption(subCatBox,"Glaziers", "Glaziers");
		addOption(subCatBox,"Hairdressing", "Hairdressing");
		addOption(subCatBox,"Handy-persons", "Handy-persons");
		addOption(subCatBox,"Labourers", "Labourers");
		addOption(subCatBox,"Painting", "Painting");
		addOption(subCatBox,"Plumbing", "Plumbing");
		addOption(subCatBox,"Printing", "Printing");
		addOption(subCatBox,"Roofing", "Roofing");
		addOption(subCatBox,"Security", "Security");
		addOption(subCatBox,"Sign writers", "Sign writers");
		addOption(subCatBox,"Technicians", "Technicians");
		addOption(subCatBox,"Other", "Other");
	}

	if (selectedCat.value == 'Transport & logistics')
	{
		removeAllOptions(subCatBox);
		subCatBox.disabled = false;
		addOption(subCatBox,"Drivers & couriers", "Drivers & couriers");
		addOption(subCatBox,"Freight forwarders", "Freight forwarders");
		addOption(subCatBox,"Import & export", "Import & export");
		addOption(subCatBox,"Management", "Management");
		addOption(subCatBox,"Operations", "Operations");
		addOption(subCatBox,"Supply chain & planning", "Supply chain & planning");
		addOption(subCatBox,"Warehouse & distribution", "Warehouse & distribution");
		addOption(subCatBox,"Other", "Other");
	}

	if (selectedCat.value == 'Other')
	{
		removeAllOptions(subCatBox);
		subCatBox.disabled = true;
	}
}

function addOption(selectbox, value, text )
{
	var optn = document.createElement("OPTION");
	optn.text = text;
	optn.value = value;

	selectbox.options.add(optn);
}

function removeAllOptions(selectbox)
{
	var i;
	for(i=selectbox.options.length-1;i>=0;i--)
	{
		//selectbox.options.remove(i);
		selectbox.remove(i);
	}
}

// -- Update Sub-Category Dropdown List From Category List -- //