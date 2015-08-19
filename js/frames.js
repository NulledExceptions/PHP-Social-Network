/* These functions control the frames in the 3rd section of the advertising page */
function PPC_frameV() {
    if(document.getElementById('PPV_frame').style.visibility=='visible') {
		PPV_frameH();
	}
	if(document.getElementById('EB_frame').style.visibility=='visible') {
		EB_frameH();
	}
	if(document.getElementById('PD_frame').style.visibility=='visible') {
		PD_frameH();
	}
	document.getElementById('EB_bt').style.visibility='hidden';
	document.getElementById('PD_bt').style.visibility='hidden';
	document.getElementById('SCHE_bt').style.visibility='hidden';
	document.getElementById('LOCA_bt').style.visibility='hidden';
	document.getElementById('AUDI_bt').style.visibility='hidden';
	document.getElementById('VOUC_bt').style.visibility='hidden';
	  document.getElementById('PPC_frame').style.visibility='visible';
}
function PPC_frameH() {
	document.getElementById('EB_bt').style.visibility='visible';
	document.getElementById('PD_bt').style.visibility='visible';
	document.getElementById('SCHE_bt').style.visibility='visible';
	document.getElementById('LOCA_bt').style.visibility='visible';
	document.getElementById('AUDI_bt').style.visibility='visible';
	document.getElementById('VOUC_bt').style.visibility='visible';
	  document.getElementById('PPC_frame').style.visibility='hidden';
}

function PPV_frameV() {
    if(document.getElementById('PPC_frame').style.visibility=='visible') {
		PPC_frameH();
	}
	if(document.getElementById('PD_frame').style.visibility=='visible') {
		PB_frameH();
	}
	if(document.getElementById('EB_frame').style.visibility=='visible') {
		EB_frameH();
	}
	document.getElementById('EB_bt').style.visibility='hidden';
	document.getElementById('PD_bt').style.visibility='hidden';
	document.getElementById('SCHE_bt').style.visibility='hidden';
	document.getElementById('LOCA_bt').style.visibility='hidden';
	document.getElementById('AUDI_bt').style.visibility='hidden';
	document.getElementById('VOUC_bt').style.visibility='hidden';
	  document.getElementById('PPV_frame').style.visibility='visible';
}
function PPV_frameH() {
	document.getElementById('EB_bt').style.visibility='visible';
	document.getElementById('PD_bt').style.visibility='visible';
	document.getElementById('SCHE_bt').style.visibility='visible';
	document.getElementById('LOCA_bt').style.visibility='visible';
	document.getElementById('AUDI_bt').style.visibility='visible';
	document.getElementById('VOUC_bt').style.visibility='visible';
	  document.getElementById('PPV_frame').style.visibility='hidden';
}
function EB_frameV() {
    if(document.getElementById('PD_frame').style.visibility=='visible') {
		PD_frameH();
	}
	document.getElementById('SCHE_bt').style.visibility='hidden';
	document.getElementById('LOCA_bt').style.visibility='hidden';
	document.getElementById('AUDI_bt').style.visibility='hidden';
	document.getElementById('VOUC_bt').style.visibility='hidden';
	  document.getElementById('EB_frame').style.visibility='visible';
}
function EB_frameH() {
	document.getElementById('SCHE_bt').style.visibility='visible';
	document.getElementById('LOCA_bt').style.visibility='visible';
	document.getElementById('AUDI_bt').style.visibility='visible';
	document.getElementById('VOUC_bt').style.visibility='visible';
	  document.getElementById('EB_frame').style.visibility='hidden';
}
function PD_frameV() {
    if(document.getElementById('EB_frame').style.visibility=='visible') {
		EB_frameH();
    }
	document.getElementById('SCHE_bt').style.visibility='hidden';
	document.getElementById('LOCA_bt').style.visibility='hidden';
	document.getElementById('AUDI_bt').style.visibility='hidden';
	document.getElementById('VOUC_bt').style.visibility='hidden';
	  document.getElementById('PD_frame').style.visibility='visible';
}
function PD_frameH() {
	
	document.getElementById('SCHE_bt').style.visibility='visible';
	document.getElementById('LOCA_bt').style.visibility='visible';
	document.getElementById('AUDI_bt').style.visibility='visible';
	document.getElementById('VOUC_bt').style.visibility='visible';
	  document.getElementById('PD_frame').style.visibility='hidden';
}
function SCHE_frameV() {
    if(document.getElementById('EB_frame').style.visibility=='visible') {
		EB_frameH();
    }
	document.getElementById('LOCA_bt').style.visibility='hidden';
	document.getElementById('AUDI_bt').style.visibility='hidden';
	document.getElementById('VOUC_bt').style.visibility='hidden';
	  document.getElementById('SCHE_frame').style.visibility='visible';
}
function SCHE_frameH() {
	
	document.getElementById('LOCA_bt').style.visibility='visible';
	document.getElementById('AUDI_bt').style.visibility='visible';
	document.getElementById('VOUC_bt').style.visibility='visible';
	  document.getElementById('SCHE_frame').style.visibility='hidden';
}
function LOCA_frameV() {
	
	document.getElementById('SCHE_bt').style.visibility='hidden';
	document.getElementById('PD_bt').style.visibility='hidden';
	document.getElementById('EB_bt').style.visibility='hidden';
	document.getElementById('PPV_bt').style.visibility='hidden';
	document.getElementById('PPC_bt').style.visibility='hidden';
	  document.getElementById('LOCA_frame').style.visibility='visible';
}
function LOCA_frameH() {

	document.getElementById('SCHE_bt').style.visibility='visible';
	document.getElementById('PD_bt').style.visibility='visible';
	document.getElementById('EB_bt').style.visibility='visible';
	document.getElementById('PPV_bt').style.visibility='visible';
	document.getElementById('PPC_bt').style.visibility='visible';
	  document.getElementById('LOCA_frame').style.visibility='hidden';
}
function AUDI_frameV() {
	
	if(document.getElementById('SCHE_frame').style.visibility='visible') {
		SCHE_frameH();
	}
	document.getElementById('SCHE_bt').style.visibility='hidden';
	document.getElementById('PD_bt').style.visibility='hidden';
	document.getElementById('EB_bt').style.visibility='hidden';
	document.getElementById('PPV_bt').style.visibility='hidden';
	document.getElementById('PPC_bt').style.visibility='hidden';
	  document.getElementById('AUDI_frame').style.visibility='visible';
}
function AUDI_frameH() {

	document.getElementById('SCHE_bt').style.visibility='visible';
	document.getElementById('PD_bt').style.visibility='visible';
	document.getElementById('EB_bt').style.visibility='visible';
	document.getElementById('PPV_bt').style.visibility='visible';
	document.getElementById('PPC_bt').style.visibility='visible';
	  document.getElementById('AUDI_frame').style.visibility='hidden';
}
function VOUC_frameV() {
	
	if(document.getElementById('SCHE_frame').style.visibility='visible') {
		SCHE_frameH();
	}
	if(document.getElementById('AUDI_frame').style.visibility='visible') {
		AUDI_frameH();
	}
	document.getElementById('SCHE_bt').style.visibility='hidden';
	document.getElementById('PD_bt').style.visibility='hidden';
	document.getElementById('EB_bt').style.visibility='hidden';
	document.getElementById('PPV_bt').style.visibility='hidden';
	document.getElementById('PPC_bt').style.visibility='hidden';
	  document.getElementById('VOUC_frame').style.visibility='visible';
}
function VOUC_frameH() {

	document.getElementById('SCHE_bt').style.visibility='visible';
	document.getElementById('PD_bt').style.visibility='visible';
	document.getElementById('EB_bt').style.visibility='visible';
	document.getElementById('PPV_bt').style.visibility='visible';
	document.getElementById('PPC_bt').style.visibility='visible';
	  document.getElementById('VOUC_frame').style.visibility='hidden';
}
function crop_frameV() {
	document.getElementById('pic_frame').style.visibility='hidden';
	document.getElementById('crop_frame').style.visibility='visible';
}
function crop_frameH() {
	document.getElementById('pic_frame').style.visibility='visible';
	document.getElementById('crop_frame').style.visibility='hidden';
}

/* These functions control the frames for the account settings page */

function INFORMATION_frameV() {
	
		if(document.getElementById('PROFILEP_frame').style.visibility=='visible') {
		PROFILEP_frameH();
	}
		if(document.getElementById('CONNECTIONS_frame').style.visibility=='visible') {
		CONNECTIONS_frameH();
	}
		if(document.getElementById('EDUCATION_frame').style.visibility=='visible') {
		EDUCATION_frameH();
	}
	document.getElementById('acct_PROFILEP').style.visibility='hidden';
	document.getElementById('acct_CONNECTIONS').style.visibility='hidden';
	document.getElementById('acct_EDUCATION').style.visibility='hidden';
	document.getElementById('acct_GARAGE').style.visibility='hidden';
	document.getElementById('acct_ENTERTAINMENT').style.visibility='hidden';
	document.getElementById('acct_ACTIVITIES').style.visibility='hidden';
	document.getElementById('acct_CONTACT').style.visibility='hidden';
	document.getElementById('acct_PRIVACY').style.visibility='hidden';
	  document.getElementById('INFORMATION_frame').style.visibility='visible';
	  document.getElementById('info_x').style.visibility='visible';
	  document.getElementById('acct_INFO').style.background='#c1c1c1';
}
function INFORMATION_frameH() {
	
	document.getElementById('acct_PROFILEP').style.visibility='visible';
	document.getElementById('acct_CONNECTIONS').style.visibility='visible';
	document.getElementById('acct_EDUCATION').style.visibility='visible';
	document.getElementById('acct_GARAGE').style.visibility='visible';
	document.getElementById('acct_ENTERTAINMENT').style.visibility='visible';
	document.getElementById('acct_ACTIVITIES').style.visibility='visible';
	document.getElementById('acct_CONTACT').style.visibility='visible';
	document.getElementById('acct_PRIVACY').style.visibility='visible';
	  document.getElementById('INFORMATION_frame').style.visibility='hidden';
	  document.getElementById('info_x').style.visibility='hidden';
	  document.getElementById('acct_INFO').style.background='#fff';
	  document.getElementById('info_check').style.visibility='visible';
}

function PROFILEP_frameV() {
		
		if(document.getElementById('CONNECTIONS_frame').style.visibility=='visible') {
		CONNECTIONS_frameH();
	}
		if(document.getElementById('EDUCATION_frame').style.visibility=='visible') {
		EDUCATION_frameH();
	}
	document.getElementById('acct_CONNECTIONS').style.visibility='hidden';
	document.getElementById('acct_EDUCATION').style.visibility='hidden';
	document.getElementById('acct_GARAGE').style.visibility='hidden';
	document.getElementById('acct_ENTERTAINMENT').style.visibility='hidden';
	document.getElementById('acct_ACTIVITIES').style.visibility='hidden';
	document.getElementById('acct_CONTACT').style.visibility='hidden';
	document.getElementById('acct_PRIVACY').style.visibility='hidden';
	  document.getElementById('PROFILEP_frame').style.visibility='visible';
	  document.getElementById('profilepic_x').style.visibility='visible';
	  document.getElementById('acct_PROFILEP').style.background='#c1c1c1';
}
function PROFILEP_frameH() {

	document.getElementById('acct_CONNECTIONS').style.visibility='visible';
	document.getElementById('acct_EDUCATION').style.visibility='visible';
	document.getElementById('acct_GARAGE').style.visibility='visible';
	document.getElementById('acct_ENTERTAINMENT').style.visibility='visible';
	document.getElementById('acct_ACTIVITIES').style.visibility='visible';
	document.getElementById('acct_CONTACT').style.visibility='visible';
	document.getElementById('acct_PRIVACY').style.visibility='visible';
	  document.getElementById('PROFILEP_frame').style.visibility='hidden';
	  document.getElementById('acct_PROFILEP').style.background='#fff';
	  document.getElementById('profilepic_x').style.visibility='hidden';
	  document.getElementById('profilepic_check').style.visibility='visible';
}

function CONNECTIONS_frameV() {

		if(document.getElementById('EDUCATION_frame').style.visibility=='visible') {
		EDUCATION_frameH();
	}
	document.getElementById('acct_EDUCATION').style.visibility='hidden';
	document.getElementById('acct_GARAGE').style.visibility='hidden';
	document.getElementById('acct_ENTERTAINMENT').style.visibility='hidden';
	document.getElementById('acct_ACTIVITIES').style.visibility='hidden';
	document.getElementById('acct_CONTACT').style.visibility='hidden';
	document.getElementById('acct_PRIVACY').style.visibility='hidden';
	  document.getElementById('CONNECTIONS_frame').style.visibility='visible';
	  document.getElementById('connections_x').style.visibility='visible';
	  document.getElementById('acct_CONNECTIONS').style.background='#c1c1c1';
}
function CONNECTIONS_frameH() {

	document.getElementById('acct_EDUCATION').style.visibility='visible';
	document.getElementById('acct_GARAGE').style.visibility='visible';
	document.getElementById('acct_ENTERTAINMENT').style.visibility='visible';
	document.getElementById('acct_ACTIVITIES').style.visibility='visible';
	document.getElementById('acct_CONTACT').style.visibility='visible';
	document.getElementById('acct_PRIVACY').style.visibility='visible';
	  document.getElementById('CONNECTIONS_frame').style.visibility='hidden';
	  document.getElementById('acct_CONNECTIONS').style.background='#fff';
	  document.getElementById('connections_x').style.visibility='hidden';
	  document.getElementById('connections_check').style.visibility='visible';
}

function EDUCATION_frameV() {

	document.getElementById('acct_GARAGE').style.visibility='hidden';
	document.getElementById('acct_ENTERTAINMENT').style.visibility='hidden';
	document.getElementById('acct_ACTIVITIES').style.visibility='hidden';
	document.getElementById('acct_CONTACT').style.visibility='hidden';
	document.getElementById('acct_PRIVACY').style.visibility='hidden';
	  document.getElementById('EDUCATION_frame').style.visibility='visible';
	  document.getElementById('education_x').style.visibility='visible';
	  document.getElementById('acct_EDUCATION').style.background='#c1c1c1';
}
function EDUCATION_frameH() {

	document.getElementById('acct_GARAGE').style.visibility='visible';
	document.getElementById('acct_ENTERTAINMENT').style.visibility='visible';
	document.getElementById('acct_ACTIVITIES').style.visibility='visible';
	document.getElementById('acct_CONTACT').style.visibility='visible';
	document.getElementById('acct_PRIVACY').style.visibility='visible';
	  document.getElementById('EDUCATION_frame').style.visibility='hidden';
	  document.getElementById('acct_EDUCATION').style.background='#fff';
	  document.getElementById('education_x').style.visibility='hidden';
	  document.getElementById('education_check').style.visibility='visible';
}

function GARAGE_frameV() {
	
	document.getElementById('acct_INFO').style.visibility='hidden';
	document.getElementById('acct_PROFILEP').style.visibility='hidden';
	document.getElementById('acct_CONNECTIONS').style.visibility='hidden';
	document.getElementById('acct_EDUCATION').style.visibility='hidden';
	  document.getElementById('GARAGE_frame').style.visibility='visible';
	  document.getElementById('acct_GARAGE').style.background='#c1c1c1';
	  document.getElementById('garage_x').style.visibility='visible';
}
function GARAGE_frameH() {

	document.getElementById('acct_INFO').style.visibility='visible';
	document.getElementById('acct_PROFILEP').style.visibility='visible';
	document.getElementById('acct_CONNECTIONS').style.visibility='visible';
	document.getElementById('acct_EDUCATION').style.visibility='visible';
	  document.getElementById('GARAGE_frame').style.visibility='hidden';
	  document.getElementById('acct_GARAGE').style.background='#fff';
	  document.getElementById('garage_x').style.visibility='hidden';
	  document.getElementById('garage_check').style.visibility='visible';
}

function ENTERTAINMENT_frameV() {
	
		if(document.getElementById('GARAGE_frame').style.visibility=='visible') {
		GARAGE_frameH();
	}
	document.getElementById('acct_INFO').style.visibility='hidden';
	document.getElementById('acct_PROFILEP').style.visibility='hidden';
	document.getElementById('acct_CONNECTIONS').style.visibility='hidden';
	document.getElementById('acct_EDUCATION').style.visibility='hidden';
	document.getElementById('acct_GARAGE').style.visibility='hidden';
	  document.getElementById('ENTERTAINMENT_frame').style.visibility='visible';
	  document.getElementById('acct_ENTERTAINMENT').style.background='#c1c1c1';
	  document.getElementById('entertainment_x').style.visibility='visible';
}
function ENTERTAINMENT_frameH() {

	document.getElementById('acct_INFO').style.visibility='visible';
	document.getElementById('acct_PROFILEP').style.visibility='visible';
	document.getElementById('acct_CONNECTIONS').style.visibility='visible';
	document.getElementById('acct_EDUCATION').style.visibility='visible';
	document.getElementById('acct_GARAGE').style.visibility='visible';
	  document.getElementById('ENTERTAINMENT_frame').style.visibility='hidden';
	  document.getElementById('acct_ENTERTAINMENT').style.background='#fff';
	  document.getElementById('entertainment_x').style.visibility='hidden';
	  document.getElementById('entertainment_check').style.visibility='visible';
}

function ACTIVITIES_frameV() {
	
		if(document.getElementById('GARAGE_frame').style.visibility=='visible') {
		GARAGE_frameH();
	}
		if(document.getElementById('ENTERTAINMENT_frame').style.visibility=='visible') {
		ENTERTAINMENT_frameH();
	}
	document.getElementById('acct_INFO').style.visibility='hidden';
	document.getElementById('acct_PROFILEP').style.visibility='hidden';
	document.getElementById('acct_CONNECTIONS').style.visibility='hidden';
	document.getElementById('acct_EDUCATION').style.visibility='hidden';
	document.getElementById('acct_GARAGE').style.visibility='hidden';
	document.getElementById('acct_ENTERTAINMENT').style.visibility='hidden';
	  document.getElementById('ACTIVITIES_frame').style.visibility='visible';
	  document.getElementById('acct_ACTIVITIES').style.background='#c1c1c1';
	  document.getElementById('activities_x').style.visibility='visible';
}
function ACTIVITIES_frameH() {
	
	document.getElementById('acct_INFO').style.visibility='visible';
	document.getElementById('acct_PROFILEP').style.visibility='visible';
	document.getElementById('acct_CONNECTIONS').style.visibility='visible';
	document.getElementById('acct_EDUCATION').style.visibility='visible';
	document.getElementById('acct_GARAGE').style.visibility='visible';
	document.getElementById('acct_ENTERTAINMENT').style.visibility='visible';
	  document.getElementById('ACTIVITIES_frame').style.visibility='hidden';
	  document.getElementById('acct_ACTIVITIES').style.background='#fff';
	  document.getElementById('activities_x').style.visibility='hidden';
	  document.getElementById('activities_check').style.visibility='visible';
}

function CONTACT_frameV() {

		if(document.getElementById('GARAGE_frame').style.visibility=='visible') {
		GARAGE_frameH();
	}
		if(document.getElementById('ENTERTAINMENT_frame').style.visibility=='visible') {
		ENTERTAINMENT_frameH();
	}
		if(document.getElementById('ACTIVITIES_frame').style.visibility=='visible') {
		ACTIVITIES_frameH();
	}	
	document.getElementById('acct_INFO').style.visibility='hidden';
	document.getElementById('acct_PROFILEP').style.visibility='hidden';
	document.getElementById('acct_CONNECTIONS').style.visibility='hidden';
	document.getElementById('acct_EDUCATION').style.visibility='hidden';
	document.getElementById('acct_GARAGE').style.visibility='hidden';
	document.getElementById('acct_ENTERTAINMENT').style.visibility='hidden';
	document.getElementById('acct_ACTIVITIES').style.visibility='hidden';
	  document.getElementById('CONTACT_frame').style.visibility='visible';
	  document.getElementById('acct_CONTACT').style.background='#c1c1c1';
	  document.getElementById('contact_x').style.visibility='visible';
}
function CONTACT_frameH() {
	
	document.getElementById('acct_INFO').style.visibility='visible';
	document.getElementById('acct_PROFILEP').style.visibility='visible';
	document.getElementById('acct_CONNECTIONS').style.visibility='visible';
	document.getElementById('acct_EDUCATION').style.visibility='visible';
	document.getElementById('acct_GARAGE').style.visibility='visible';
	document.getElementById('acct_ENTERTAINMENT').style.visibility='visible';
	document.getElementById('acct_ACTIVITIES').style.visibility='visible';
	  document.getElementById('CONTACT_frame').style.visibility='hidden';
	  document.getElementById('acct_CONTACT').style.background='#fff';
	  document.getElementById('contact_x').style.visibility='hidden';
	  document.getElementById('contact_check').style.visibility='visible';
}
