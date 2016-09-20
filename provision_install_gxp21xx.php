<?php
	for ($device_counter=1;$device_counter<=3;$device_counter+=1)
	{
		load_device_default($con,$device_counter,"Account 1: General Settings","Account Active?","Mark this account as active or inactive.","P271",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Account 1: General Settings","Account Name","Name of the account, displayed on the phone.","P270",2,"");
		load_device_default($con,$device_counter,"Account 1: General Settings","SIP Server","Address of the SIP server/PBX.","P47",2,"");
		load_device_default($con,$device_counter,"Account 1: General Settings","Secondary SIP Server","Address of the Secondary SIP Server/PBX.","P2312",2,"");
		load_device_default($con,$device_counter,"Account 1: General Settings","Outbound Proxy","In case a proxy is used.","P48",2,"");
		load_device_default($con,$device_counter,"Account 1: General Settings","BLF Server","Only if you have a specific Busy Lamp Field server.","P2375",2,"");
		load_device_default($con,$device_counter,"Account 1: General Settings","SIP User ID","Usually the extension number.","P35",2,"");
		load_device_default($con,$device_counter,"Account 1: General Settings","Auth ID","Usually the extension number.","P36",2,"");
		load_device_default($con,$device_counter,"Account 1: General Settings","Auth Password","Password or secret set on the PBX.","P34",2,"");
		load_device_default($con,$device_counter,"Account 1: General Settings","Name","Name of the account, not displayed on the phone.","P3",2,"");
		load_device_default($con,$device_counter,"Account 1: General Settings","Voicemail UserID","Dial this to get voicemail. Asterisk is *97.","P33",2,"");
		load_device_default($con,$device_counter,"Account 1: General Settings","Show Account Name Only?","Select YES to only show the account name, no extension.","P2380",1,"0","No","1","Yes");
		
		load_device_default($con,$device_counter,"Account 1: Network Settings","DNS Mode","Set the DNS mode for the phone","P103",1,"0","A-Record","1","SRV","2","NAPTR/SRV","3","Use Configured IP");
		load_device_default($con,$device_counter,"Account 1: Network Settings","Primary IP","IP, max 15 characters (ipv4).","P2308",2,"");
		load_device_default($con,$device_counter,"Account 1: Network Settings","Backup IP 1","IP, max 15 characters (ipv4).","P2309",2,"");
		load_device_default($con,$device_counter,"Account 1: Network Settings","Backup IP 2","IP, max 15 characters (ipv4).","P2310",2,"");
		load_device_default($con,$device_counter,"Account 1: Network Settings","NAT Traversal","Settings for NAT.","P52",1,"0","No","1","STUN","2","Keep Alive","3","Auto","4","VPN");
		load_device_default($con,$device_counter,"Account 1: Network Settings","Proxy-Require","This is a SIP extension to enable firewall penetration. 64 character max.","P197",2,"");
		
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Basic","TEL URI","Used to interface with PSTN if no SIP server exists. Don't touch this...","P63",1,"0","Disabled","1","User=Phone","2","Enabled");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Basic","SIP Registration","Enable/Disable registration to the SIP server.","P31",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Basic","Unregister on Reboot","Expire current registration on the server if rebooted.","P81",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Basic","Register Expiration (mins)","Registration expiration time, in minutes. Max 64800.","P32",2,"60");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Basic","Register Before Expiration (secs)","Seconds before expiry to re-register. Max 64800.","P2330",2,"0");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Basic","Local SIP Port","Port for SIP communications.","P40",2,"5060");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Basic","SIP Registration Failure Retry Wait Time (secs)","In case of failure, wait this many seconds to retry registration. Max 3600","P138",2,"20");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Basic","SIP T1 Timeout","RFC3261 T1 Value (RTT Estimate)","P209",1,"50","0.5 Seconds","100","1 Second","200","2 Seconds");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Basic","SIP T2 Timeout","RFC3261 T2 Value: Maximum retransmit interval for non-INVITE requests and INVITE responses.","P250",1,"400","4 Seconds","200","2 Seconds","800","8 Seconds");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Basic","SIP Transport","Protocol for SIP data","P130",1,"0","UDP","1","TCP","2","TLS/TCP");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Basic","SIP URI Scheme when using TLS","URI Scheme to use when the connection uses TLS.","P2329",1,"1","SIPS","0","SIP");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Basic","Use Actual Ephemeral Port in Contact with TCP/TLS","This sounds complicated.","P2331",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Basic","Remove OBP from Route","Remove OBP from Route","P2305",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Basic","Support SIP Instance ID","Allow support for the SIP instance ID.","P288",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Basic","SUBSCRIBE for MWI","If Yes, Send SUBSCRIBE + NOTIFY. If no, only send NOTIFY. This is set in the PBX settings.","P99",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Basic","SUBSCRIBE for Registration","Send SUBSCRIBE prior to registering, if required.","P2319",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Basic","Enable 100rel","Enable 100rel","P272",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Basic","CallerID Display","How Caller ID should be extrapolated.","P2324",1,"0","Auto","1","Disabled","2","From header");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Basic","Use Privacy Header","Use Privacy Header","P2338",1,"0","Default","1","No","2","Yes");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Basic","Use P-Preferred-Identity Header","Use P-Preferred-Identity Header","P2339",1,"0","Default","1","No","2","Yes");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Basic","Add Auth Header on initial REGISTER","May be required if AUTH-ing registrations.","P2359",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Basic","Allow SIP Reset","Allow a SIP message to reset the device to factory defaults.","P26015",1,"0","No","1","Yes");
		
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Advanced","Line-Seize Timeout (secs)","Timeout before seizing the line. Max 60.","P2313",2,"15");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Advanced","Eventlist BLF URI","Eventlist BLF URI","P134",2,"");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Advanced","Auto Provision Eventlist BLFs","Auto Provision Eventlist BLFs","P2389",1,"0","Disabled","1","Enabled");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Advanced","Conference URI","Conference URI","P2318",2,"");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Advanced","Music On Hold URI","URI for MOH","P2350",2,"");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Advanced","Force BLF Call-pickup by Prefix","","P6752",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Advanced","BLF Call-pickup Prefix","Prefix for call-pickup BLF","P1347",2,"**");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Advanced","PUBLISH for Presence","","P188",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Advanced","Omit charset=UTF-8 in MESSAGE","","P2355",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Advanced","Special Feature","","P198",1,"100","Standard","101","Nortel MCS","102","Broadsoft","108","CBCOM","109","RNK","110","Sylantro","117","Huawei IMS","119","Phonepower");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Advanced","Broadsoft Call Center","","P2341",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Advanced","Hoteling Event","","P2342",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Advanced","Call Center Status","","P2343",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Advanced","Broadsoft Executive Assistant","","P2364",1,"0","Disabled","1","Enabled");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Advanced","Feature Key Synchronization","","P2325",1,"0","Disabled","1","Enabled");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Advanced","Broadsoft Call Park","","P2388",1,"0","Disabled","1","Enabled");
		
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Session Timer","Session Expiration (mins)","Min: 90, Max: 64800.","P260",2,"180");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Session Timer","Minimum SE (secs, lower than Session Exp.)","Min: 90, Max: 64800. Must be lower than the previous setting (Session Expiration).","P261",2,"90");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Session Timer","Caller Request Timer","Request for timer when calling.","P262",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Session Timer","Callee Request Timer","Request for timer when called, i.e. if remote party supports timer but did not request for one.","P263",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Session Timer","Force Timer","Force use of timer, even if remote party doesn't support it.","P264",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Session Timer","UAC Specify Refresher","","P266",1,"0","Omit","1","UAC","2","UAS");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Session Timer","UAS Specify Refresher","","P267",1,"1","UAC","2","UAS");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Session Timer","Force INVITE","Always refresh with INVITE instead of UPDATE even when remote party supports UPDATE.","P265",1,"0","No","1","Yes");
		
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Security","Check Domain Certificates","When set to Yes, domain certificates will be checked as defined in RFC5922.","P2311",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Security","Validate Certification Chain","","P2367",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Security","Validate Incoming Messages","","P2306",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Security","Check SIP User ID for Incoming INVITE","","P258",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Security","Accept Incoming SIP from Proxy Only","","P2347",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Security","Authenticate Incoming INVITE","","P2346",1,"0","No","1","Yes");
		
		load_device_default($con,$device_counter,"Account 1: Audio","Send DTMF: In-Audio","","P2301",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 1: Audio","Send DTMF: RTP (RFC2833)","","P2302",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Account 1: Audio","Send DTMF: SIP INFO","","P2303",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 1: Audio","DTMF Payload Type","Range: 96 - 127","P79",2,"101");
		load_device_default($con,$device_counter,"Account 1: Audio","Preferred Vocoder: Choice 1","","P57",1,"0","PCMU","2","G.726-32","8","PCMA","9","G.722","18","G.729A/B");
		load_device_default($con,$device_counter,"Account 1: Audio","Preferred Vocoder: Choice 2","","P58",1,"8","PCMA","0","PCMU","2","G.726-32","9","G.722","18","G.729A/B");
		load_device_default($con,$device_counter,"Account 1: Audio","Preferred Vocoder: Choice 3","","P59",1,"18","G.729A/B","0","PCMU","2","G.726-32","8","PCMA","9","G.722");
		load_device_default($con,$device_counter,"Account 1: Audio","Preferred Vocoder: Choice 4","","P60",1,"9","G.722","0","PCMU","2","G.726-32","8","PCMA","18","G.729A/B");
		load_device_default($con,$device_counter,"Account 1: Audio","Preferred Vocoder: Choice 5","","P61",1,"2","G.726-32","0","PCMU","8","PCMA","9","G.722","18","G.729A/B");
		load_device_default($con,$device_counter,"Account 1: Audio","Use First Matching Vocoder in 200 OK SDP","","P62348",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 1: Audio","Disable Multiple 'm' line in SDP","","P137",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 1: Audio","SRTP Mode","","P183",1,"0","Disabled","1","Enabled but not forced","2","Enabled and forced","3","Optional");
		load_device_default($con,$device_counter,"Account 1: Audio","Crypto Life Time","","P2363",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 1: Audio","Symmetric RTP","","P291",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 1: Audio","Silence Suppression","","P50",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 1: Audio","Voice Frames per TX","Range: 1 - 64","P37",2,"2");
		load_device_default($con,$device_counter,"Account 1: Audio","G.726-32 Packing Mode","","P2323",1,"0","ITU","1","IETF");
		load_device_default($con,$device_counter,"Account 1: Audio","Jitter Buffer Type","","P133",1,"1","Adaptive","0","Fixed");
		load_device_default($con,$device_counter,"Account 1: Audio","Jitter Buffer Length","","P132",1,"2","300ms","0","100ms","1","200ms","4","500ms","5","600ms","6","700ms","7","800ms");
		
		load_device_default($con,$device_counter,"Account 1: Call Settings","Early Dial","Use Yes if proxy supports 484 response.","P29",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 1: Call Settings","Dial Plan Prefix","Prefix to prepend to outgoing digits.","P66",2,"");
		load_device_default($con,$device_counter,"Account 1: Call Settings","Dial Plan","Consult the user manual for syntax.","P290",2,"{ x!PLUS! | *x!PLUS! | *xx*x!PLUS! }");
		load_device_default($con,$device_counter,"Account 1: Call Settings","Call Logging","","P182",1,"0","Log All Calls","1","Log incoming/outgoing (not missed calls)","2","Disable call logging");
		load_device_default($con,$device_counter,"Account 1: Call Settings","Account Ring Tone","","P104",1,"0","System ringtone","1","Custom tone 1","2","Custom tone 2","3","Custom tone 3");
		load_device_default($con,$device_counter,"Account 1: Call Settings","Matching Caller ID: Rule 1","","P1488",2,"");
		load_device_default($con,$device_counter,"Account 1: Call Settings","Matching CID Rule 1: Ringtone","If Caller ID Rule 1 matches, use this ringtone.","P1489",1,"0","System ringtone","1","Custom tone 1","2","Custom tone 2","3","Custom tone 3");
		load_device_default($con,$device_counter,"Account 1: Call Settings","Matching Caller ID: Rule 2","","P1490",2,"");
		load_device_default($con,$device_counter,"Account 1: Call Settings","Matching CID Rule 2: Ringtone","If Caller ID Rule 2 matches, use this ringtone.","P1491",1,"0","System ringtone","1","Custom tone 1","2","Custom tone 2","3","Custom tone 3");
		load_device_default($con,$device_counter,"Account 1: Call Settings","Matching Caller ID: Rule 3","","P1492",2,"");
		load_device_default($con,$device_counter,"Account 1: Call Settings","Matching CID Rule 3: Ringtone","If Caller ID Rule 3 matches, use this ringtone.","P1493",1,"0","System ringtone","1","Custom tone 1","2","Custom tone 2","3","Custom tone 3");
		load_device_default($con,$device_counter,"Account 1: Call Settings","Ring Timeout (secs)","Range: 30 - 3600","P1328",2,"60");
		load_device_default($con,$device_counter,"Account 1: Call Settings","Send Anonymous","Outbound Caller ID will be blocked if set to yes)","P65",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 1: Call Settings","Anonymous Call Rejection","","P129",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 1: Call Settings","Auto Answer","","P90",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 1: Call Settings","Auto Answer by Call-Info","","P298",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 1: Call Settings","Barging by Call-Info","Barging: Taking over a call on this phone from another phone.","P26019",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 1: Call Settings","Custom Call-Info for Auto Answer","Custom info inside the header to auto-answer.","P2356",2,"");
		load_device_default($con,$device_counter,"Account 1: Call Settings","Refer-To Use Target Contact","","P135",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 1: Call Settings","Transfer on Conference Hangup","","P2304",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 1: Call Settings","Disable Recovery on Blind Transfer","","P2384",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 1: Call Settings","No Key Entry Timeout (secs)","Timeout to continue after last key press. Range: 1-15.","P85",2,"4");
		load_device_default($con,$device_counter,"Account 1: Call Settings","Use # as Dial Key","After dialing a number, instead of just waiting, you can hit # to send the digits.","P72",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Account 1: Call Settings","On Hold Reminder Tone","Remind the phone user that they have a call on hold.","P26006",1,"0","No","1","Yes");
		
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Feature Codes","Enable Call Features","Enable features like Forwarding, IP Calling, etc.","P191",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Feature Codes","Do Not Disturb (DND) On","Dial this to turn on DND.","P2344",2,"");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Feature Codes","Do Not Disturb (DND) Off","Dial this to turn of DND.","P2345",2,"");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Feature Codes","Call Forward Unconditionally On","Dial this to turn on unconditional call forwarding.","P26013",2,"");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Feature Codes","Call Forward Unconditionally Off","Dial this to turn off unconditional call forwarding.","P26014",2,"");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Feature Codes","Call Forward if Busy On","Dial this to forward calls if already on a call.","P26009",2,"");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Feature Codes","Call Forward if Busy Off","Dial this to disable forwarding calls if already on a call. (Make the caller wait for you to pick up).","P26010",2,"");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Feature Codes","Call Forward if No Answer On","","P26011",2,"");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Feature Codes","Call Forward if No Answer Off","","P26012",2,"");
		load_device_default($con,$device_counter,"Account 1: SIP Settings/Feature Codes","Delayed Call Forward Wait Time (secs)","Delay before forwarding a call if not answered. Range: 1 - 120.","P139",2,"20");
		
		load_device_default($con,$device_counter,"Account 2: General Settings","Account Active?","Mark this account as active or inactive.","P401",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Account 2: General Settings","Account Name","Name of the account, displayed on the phone.","P417",2,"");
		load_device_default($con,$device_counter,"Account 2: General Settings","SIP Server","Address of the SIP server/PBX.","P402",2,"");
		load_device_default($con,$device_counter,"Account 2: General Settings","Secondary SIP Server","Address of the Secondary SIP Server/PBX.","P2412",2,"");
		load_device_default($con,$device_counter,"Account 2: General Settings","Outbound Proxy","In case a proxy is used.","P403",2,"");
		load_device_default($con,$device_counter,"Account 2: General Settings","BLF Server","Only if you have a specific Busy Lamp Field server.","P2475",2,"");
		load_device_default($con,$device_counter,"Account 2: General Settings","SIP User ID","Usually the extension number.","P404",2,"");
		load_device_default($con,$device_counter,"Account 2: General Settings","Auth ID","Usually the extension number.","P405",2,"");
		load_device_default($con,$device_counter,"Account 2: General Settings","Auth Password","Password or secret set on the PBX.","P406",2,"");
		load_device_default($con,$device_counter,"Account 2: General Settings","Name","Name of the account, not displayed on the phone.","P407",2,"");
		load_device_default($con,$device_counter,"Account 2: General Settings","Voicemail UserID","Dial this to get voicemail. Asterisk is *97.","P426",2,"");
		load_device_default($con,$device_counter,"Account 2: General Settings","Show Account Name Only?","Select YES to only show the account name, no extension.","P2480",1,"0","No","1","Yes");
		
		load_device_default($con,$device_counter,"Account 2: Network Settings","DNS Mode","Set the DNS mode for the phone","P408",1,"0","A-Record","1","SRV","2","NAPTR/SRV","3","Use Configured IP");
		load_device_default($con,$device_counter,"Account 2: Network Settings","Primary IP","IP, max 15 characters (ipv4).","P2408",2,"");
		load_device_default($con,$device_counter,"Account 2: Network Settings","Backup IP 1","IP, max 15 characters (ipv4).","P2409",2,"");
		load_device_default($con,$device_counter,"Account 2: Network Settings","Backup IP 2","IP, max 15 characters (ipv4).","P2410",2,"");
		load_device_default($con,$device_counter,"Account 2: Network Settings","NAT Traversal","Settings for NAT.","P414",1,"0","No","1","STUN","2","Keep Alive","3","Auto","4","VPN");
		load_device_default($con,$device_counter,"Account 2: Network Settings","Proxy-Require","This is a SIP extension to enable firewall penetration. 64 character max.","P418",2,"");
		
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Basic","TEL URI","Used to interface with PSTN if no SIP server exists. Don't touch this...","P409",1,"0","Disabled","1","User=Phone","2","Enabled");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Basic","SIP Registration","Enable/Disable registration to the SIP server.","P410",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Basic","Unregister on Reboot","Expire current registration on the server if rebooted.","P411",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Basic","Register Expiration (mins)","Registration expiration time, in minutes. Max 64800.","P412",2,"60");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Basic","Register Before Expiration (secs)","Seconds before expiry to re-register. Max 64800.","P2430",2,"0");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Basic","Local SIP Port","Port for SIP communications.","P413",2,"5060");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Basic","SIP Registration Failure Retry Wait Time (secs)","In case of failure, wait this many seconds to retry registration. Max 3600","P471",2,"20");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Basic","SIP T1 Timeout","RFC3261 T1 Value (RTT Estimate)","P440",1,"50","0.5 Seconds","100","1 Second","200","2 Seconds");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Basic","SIP T2 Timeout","RFC3261 T2 Value: Maximum retransmit interval for non-INVITE requests and INVITE responses.","P441",1,"400","4 Seconds","200","2 Seconds","800","8 Seconds");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Basic","SIP Transport","Protocol for SIP data","P448",1,"0","UDP","1","TCP","2","TLS/TCP");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Basic","SIP URI Scheme when using TLS","URI Scheme to use when the connection uses TLS.","P2429",1,"1","SIPS","0","SIP");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Basic","Use Actual Ephemeral Port in Contact with TCP/TLS","This sounds complicated.","P2431",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Basic","Remove OBP from Route","Remove OBP from Route","P2405",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Basic","Support SIP Instance ID","Allow support for the SIP instance ID.","P489",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Basic","SUBSCRIBE for MWI","If Yes, Send SUBSCRIBE + NOTIFY. If no, only send NOTIFY. This is set in the PBX settings.","P415",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Basic","SUBSCRIBE for Registration","Send SUBSCRIBE prior to registering, if required.","P2419",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Basic","Enable 100rel","Enable 100rel","P435",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Basic","CallerID Display","How Caller ID should be extrapolated.","P2424",1,"0","Auto","1","Disabled","2","From header");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Basic","Use Privacy Header","Use Privacy Header","P2438",1,"0","Default","1","No","2","Yes");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Basic","Use P-Preferred-Identity Header","Use P-Preferred-Identity Header","P2439",1,"0","Default","1","No","2","Yes");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Basic","Add Auth Header on initial REGISTER","May be required if AUTH-ing registrations.","P2459",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Basic","Allow SIP Reset","Allow a SIP message to reset the device to factory defaults.","P26115",1,"0","No","1","Yes");
		
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Advanced","Line-Seize Timeout (secs)","Timeout before seizing the line. Max 60.","P2413",2,"15");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Advanced","Eventlist BLF URI","Eventlist BLF URI","P444",2,"");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Advanced","Auto Provision Eventlist BLFs","Auto Provision Eventlist BLFs","P2489",1,"0","Disabled","1","Enabled");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Advanced","Conference URI","Conference URI","P2418",2,"");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Advanced","Music On Hold URI","URI for MOH","P2450",2,"");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Advanced","Force BLF Call-pickup by Prefix","","P6753",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Advanced","BLF Call-pickup Prefix","Prefix for call-pickup BLF","P481",2,"**");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Advanced","PUBLISH for Presence","","P488",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Advanced","Omit charset=UTF-8 in MESSAGE","","P2455",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Advanced","Special Feature","","P424",1,"100","Standard","101","Nortel MCS","102","Broadsoft","108","CBCOM","109","RNK","110","Sylantro","117","Huawei IMS","119","Phonepower");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Advanced","Broadsoft Call Center","","P2441",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Advanced","Hoteling Event","","P2442",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Advanced","Call Center Status","","P2443",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Advanced","Broadsoft Executive Assistant","","P2464",1,"0","Disabled","1","Enabled");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Advanced","Feature Key Synchronization","","P2425",1,"0","Disabled","1","Enabled");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Advanced","Broadsoft Call Park","","P2488",1,"0","Disabled","1","Enabled");
		
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Session Timer","Session Expiration (mins)","Min: 90, Max: 64800.","P434",2,"180");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Session Timer","Minimum SE (secs, lower than Session Exp.)","Min: 90, Max: 64800. Must be lower than the previous setting (Session Expiration).","P427",2,"90");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Session Timer","Caller Request Timer","Request for timer when calling.","P428",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Session Timer","Callee Request Timer","Request for timer when called, i.e. if remote party supports timer but did not request for one.","P429",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Session Timer","Force Timer","Force use of timer, even if remote party doesn't support it.","P430",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Session Timer","UAC Specify Refresher","","P432",1,"0","Omit","1","UAC","2","UAS");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Session Timer","UAS Specify Refresher","","P433",1,"1","UAC","2","UAS");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Session Timer","Force INVITE","Always refresh with INVITE instead of UPDATE even when remote party supports UPDATE.","P431",1,"0","No","1","Yes");
		
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Security","Check Domain Certificates","When set to Yes, domain certificates will be checked as defined in RFC5922.","P2411",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Security","Validate Certification Chain","","P2467",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Security","Validate Incoming Messages","","P2406",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Security","Check SIP User ID for Incoming INVITE","","P449",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Security","Accept Incoming SIP from Proxy Only","","P2447",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 2: SIP Settings/Security","Authenticate Incoming INVITE","","P2446",1,"0","No","1","Yes");
		
		load_device_default($con,$device_counter,"Account 2: Audio","Send DTMF: In-Audio","","P2401",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 2: Audio","Send DTMF: RTP (RFC2833)","","P2402",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Account 2: Audio","Send DTMF: SIP INFO","","P2403",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 2: Audio","DTMF Payload Type","Range: 96 - 127","P496",2,"101");
		load_device_default($con,$device_counter,"Account 2: Audio","Preferred Vocoder: Choice 1","","P451",1,"0","PCMU","2","G.726-32","8","PCMA","9","G.722","18","G.729A/B");
		load_device_default($con,$device_counter,"Account 2: Audio","Preferred Vocoder: Choice 2","","P452",1,"8","PCMA","0","PCMU","2","G.726-32","9","G.722","18","G.729A/B");
		load_device_default($con,$device_counter,"Account 2: Audio","Preferred Vocoder: Choice 3","","P453",1,"18","G.729A/B","0","PCMU","2","G.726-32","8","PCMA","9","G.722");
		load_device_default($con,$device_counter,"Account 2: Audio","Preferred Vocoder: Choice 4","","P454",1,"9","G.722","0","PCMU","2","G.726-32","8","PCMA","18","G.729A/B");
		load_device_default($con,$device_counter,"Account 2: Audio","Preferred Vocoder: Choice 5","","P455",1,"2","G.726-32","0","PCMU","8","PCMA","9","G.722","18","G.729A/B");
		load_device_default($con,$device_counter,"Account 2: Audio","Use First Matching Vocoder in 200 OK SDP","","P2448",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 2: Audio","Disable Multiple 'm' line in SDP","","P487",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 2: Audio","SRTP Mode","","P443",1,"0","Disabled","1","Enabled but not forced","2","Enabled and forced","3","Optional");
		load_device_default($con,$device_counter,"Account 2: Audio","Crypto Life Time","","P2463",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 2: Audio","Symmetric RTP","","P460",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 2: Audio","Silence Suppression","","P485",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 2: Audio","Voice Frames per TX","Range: 1 - 64","P486",2,"2");
		load_device_default($con,$device_counter,"Account 2: Audio","G.726-32 Packing Mode","","P2423",1,"0","ITU","1","IETF");
		load_device_default($con,$device_counter,"Account 2: Audio","Jitter Buffer Type","","P498",1,"1","Adaptive","0","Fixed");
		load_device_default($con,$device_counter,"Account 2: Audio","Jitter Buffer Length","","P497",1,"2","300ms","0","100ms","1","200ms","4","500ms","5","600ms","6","700ms","7","800ms");
		
		load_device_default($con,$device_counter,"Account 2: Call Settings","Early Dial","Use Yes if proxy supports 484 response.","P422",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 2: Call Settings","Dial Plan Prefix","Prefix to prepend to outgoing digits.","P419",2,"");
		load_device_default($con,$device_counter,"Account 2: Call Settings","Dial Plan","Consult the user manual for syntax.","P459",2,"{ x!PLUS! | *x!PLUS! | *xx*x!PLUS! }");
		load_device_default($con,$device_counter,"Account 2: Call Settings","Call Logging","","P442",1,"0","Log All Calls","1","Log incoming/outgoing (not missed calls)","2","Disable call logging");
		load_device_default($con,$device_counter,"Account 2: Call Settings","Account Ring Tone","","P423",1,"0","System ringtone","1","Custom tone 1","2","Custom tone 2","3","Custom tone 3");
		load_device_default($con,$device_counter,"Account 2: Call Settings","Matching Caller ID: Rule 1","","P1494",2,"");
		load_device_default($con,$device_counter,"Account 2: Call Settings","Matching CID Rule 1: Ringtone","If Caller ID Rule 1 matches, use this ringtone.","P1495",1,"0","System ringtone","1","Custom tone 1","2","Custom tone 2","3","Custom tone 3");
		load_device_default($con,$device_counter,"Account 2: Call Settings","Matching Caller ID: Rule 2","","P1496",2,"");
		load_device_default($con,$device_counter,"Account 2: Call Settings","Matching CID Rule 2: Ringtone","If Caller ID Rule 2 matches, use this ringtone.","P1497",1,"0","System ringtone","1","Custom tone 1","2","Custom tone 2","3","Custom tone 3");
		load_device_default($con,$device_counter,"Account 2: Call Settings","Matching Caller ID: Rule 3","","P1498",2,"");
		load_device_default($con,$device_counter,"Account 2: Call Settings","Matching CID Rule 3: Ringtone","If Caller ID Rule 3 matches, use this ringtone.","P1499",1,"0","System ringtone","1","Custom tone 1","2","Custom tone 2","3","Custom tone 3");
		load_device_default($con,$device_counter,"Account 2: Call Settings","Ring Timeout (secs)","Range: 30 - 3600","P476",2,"60");
		load_device_default($con,$device_counter,"Account 2: Call Settings","Send Anonymous","Outbound Caller ID will be blocked if set to yes)","P421",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 2: Call Settings","Anonymous Call Rejection","","P446",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 2: Call Settings","Auto Answer","","P425",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 2: Call Settings","Auto Answer by Call-Info","","P438",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 2: Call Settings","Barging by Call-Info","Barging: Taking over a call on this phone from another phone.","P26119",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 2: Call Settings","Custom Call-Info for Auto Answer","Custom info inside the header to auto-answer.","P2456",2,"");
		load_device_default($con,$device_counter,"Account 2: Call Settings","Refer-To Use Target Contact","","P469",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 2: Call Settings","Transfer on Conference Hangup","","P2404",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 2: Call Settings","Disable Recovery on Blind Transfer","","P2484",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 2: Call Settings","No Key Entry Timeout (secs)","Timeout to continue after last key press. Range: 1-15.","P491",2,"4");
		load_device_default($con,$device_counter,"Account 2: Call Settings","Use # as Dial Key","After dialing a number, instead of just waiting, you can hit # to send the digits.","P492",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Account 2: Call Settings","On Hold Reminder Tone","Remind the phone user that they have a call on hold.","P26106",1,"0","No","1","Yes");
		
		load_device_default($con,$device_counter,"Account 2: Feature Codes","Enable Call Features","Enable features like Forwarding, IP Calling, etc.","P420",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Account 2: Feature Codes","Do Not Disturb (DND) On","Dial this to turn on DND.","P2444",2,"");
		load_device_default($con,$device_counter,"Account 2: Feature Codes","Do Not Disturb (DND) Off","Dial this to turn of DND.","P2445",2,"");
		load_device_default($con,$device_counter,"Account 2: Feature Codes","Call Forward Unconditionally On","Dial this to turn on unconditional call forwarding.","P26113",2,"");
		load_device_default($con,$device_counter,"Account 2: Feature Codes","Call Forward Unconditionally Off","Dial this to turn off unconditional call forwarding.","P26114",2,"");
		load_device_default($con,$device_counter,"Account 2: Feature Codes","Call Forward if Busy On","Dial this to forward calls if already on a call.","P26109",2,"");
		load_device_default($con,$device_counter,"Account 2: Feature Codes","Call Forward if Busy Off","Dial this to disable forwarding calls if already on a call. (Make the caller wait for you to pick up).","P26110",2,"");
		load_device_default($con,$device_counter,"Account 2: Feature Codes","Call Forward if No Answer On","","P26111",2,"");
		load_device_default($con,$device_counter,"Account 2: Feature Codes","Call Forward if No Answer Off","","P26112",2,"");
		load_device_default($con,$device_counter,"Account 2: Feature Codes","Delayed Call Forward Wait Time (secs)","Delay before forwarding a call if not answered. Range: 1 - 120.","P470",2,"20");
		
		load_device_default($con,$device_counter,"Account 3: General Settings","Account Active?","Mark this account as active or inactive.","P501",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Account 3: General Settings","Account Name","Name of the account, displayed on the phone.","P517",2,"");
		load_device_default($con,$device_counter,"Account 3: General Settings","SIP Server","Address of the SIP server/PBX.","P502",2,"");
		load_device_default($con,$device_counter,"Account 3: General Settings","Secondary SIP Server","Address of the Secondary SIP Server/PBX.","P2512",2,"");
		load_device_default($con,$device_counter,"Account 3: General Settings","Outbound Proxy","In case a proxy is used.","P503",2,"");
		load_device_default($con,$device_counter,"Account 3: General Settings","BLF Server","Only if you have a specific Busy Lamp Field server.","P2575",2,"");
		load_device_default($con,$device_counter,"Account 3: General Settings","SIP User ID","Usually the extension number.","P504",2,"");
		load_device_default($con,$device_counter,"Account 3: General Settings","Auth ID","Usually the extension number.","P505",2,"");
		load_device_default($con,$device_counter,"Account 3: General Settings","Auth Password","Password or secret set on the PBX.","P506",2,"");
		load_device_default($con,$device_counter,"Account 3: General Settings","Name","Name of the account, not displayed on the phone.","P507",2,"");
		load_device_default($con,$device_counter,"Account 3: General Settings","Voicemail UserID","Dial this to get voicemail. Asterisk is *97.","P526",2,"");
		load_device_default($con,$device_counter,"Account 3: General Settings","Show Account Name Only?","Select YES to only show the account name, no extension.","P2580",1,"0","No","1","Yes");
		
		load_device_default($con,$device_counter,"Account 3: Network Settings","DNS Mode","Set the DNS mode for the phone","P508",1,"0","A-Record","1","SRV","2","NAPTR/SRV","3","Use Configured IP");
		load_device_default($con,$device_counter,"Account 3: Network Settings","Primary IP","IP, max 15 characters (ipv4).","P2508",2,"");
		load_device_default($con,$device_counter,"Account 3: Network Settings","Backup IP 1","IP, max 15 characters (ipv4).","P2509",2,"");
		load_device_default($con,$device_counter,"Account 3: Network Settings","Backup IP 2","IP, max 15 characters (ipv4).","P2510",2,"");
		load_device_default($con,$device_counter,"Account 3: Network Settings","NAT Traversal","Settings for NAT.","P514",1,"0","No","1","STUN","2","Keep Alive","3","Auto","4","VPN");
		load_device_default($con,$device_counter,"Account 3: Network Settings","Proxy-Require","This is a SIP extension to enable firewall penetration. 64 character max.","P518",2,"");
		
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Basic","TEL URI","Used to interface with PSTN if no SIP server exists. Don't touch this...","P509",1,"0","Disabled","1","User=Phone","2","Enabled");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Basic","SIP Registration","Enable/Disable registration to the SIP server.","P510",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Basic","Unregister on Reboot","Expire current registration on the server if rebooted.","P511",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Basic","Register Expiration (mins)","Registration expiration time, in minutes. Max 64800.","P512",2,"60");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Basic","Register Before Expiration (secs)","Seconds before expiry to re-register. Max 64800.","P2530",2,"0");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Basic","Local SIP Port","Port for SIP communications.","P513",2,"5060");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Basic","SIP Registration Failure Retry Wait Time (secs)","In case of failure, wait this many seconds to retry registration. Max 3600","P571",2,"20");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Basic","SIP T1 Timeout","RFC3261 T1 Value (RTT Estimate)","P540",1,"50","0.5 Seconds","100","1 Second","200","2 Seconds");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Basic","SIP T2 Timeout","RFC3261 T2 Value: Maximum retransmit interval for non-INVITE requests and INVITE responses.","P541",1,"400","4 Seconds","200","2 Seconds","800","8 Seconds");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Basic","SIP Transport","Protocol for SIP data","P548",1,"0","UDP","1","TCP","2","TLS/TCP");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Basic","SIP URI Scheme when using TLS","URI Scheme to use when the connection uses TLS.","P2529",1,"1","SIPS","0","SIP");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Basic","Use Actual Ephemeral Port in Contact with TCP/TLS","This sounds complicated.","P2531",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Basic","Remove OBP from Route","Remove OBP from Route","P2505",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Basic","Support SIP Instance ID","Allow support for the SIP instance ID.","P589",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Basic","SUBSCRIBE for MWI","If Yes, Send SUBSCRIBE + NOTIFY. If no, only send NOTIFY. This is set in the PBX settings.","P515",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Basic","SUBSCRIBE for Registration","Send SUBSCRIBE prior to registering, if required.","P2519",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Basic","Enable 100rel","Enable 100rel","P535",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Basic","CallerID Display","How Caller ID should be extrapolated.","P2524",1,"0","Auto","1","Disabled","2","From header");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Basic","Use Privacy Header","Use Privacy Header","P2538",1,"0","Default","1","No","2","Yes");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Basic","Use P-Preferred-Identity Header","Use P-Preferred-Identity Header","P2539",1,"0","Default","1","No","2","Yes");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Basic","Add Auth Header on initial REGISTER","May be required if AUTH-ing registrations.","P2559",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Basic","Allow SIP Reset","Allow a SIP message to reset the device to factory defaults.","P26215",1,"0","No","1","Yes");
		
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Advanced","Line-Seize Timeout (secs)","Timeout before seizing the line. Max 60.","P2513",2,"15");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Advanced","Eventlist BLF URI","Eventlist BLF URI","P544",2,"");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Advanced","Auto Provision Eventlist BLFs","Auto Provision Eventlist BLFs","P2589",1,"0","Disabled","1","Enabled");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Advanced","Conference URI","Conference URI","P2518",2,"");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Advanced","Music On Hold URI","URI for MOH","P2550",2,"");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Advanced","Force BLF Call-pickup by Prefix","","P6754",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Advanced","BLF Call-pickup Prefix","Prefix for call-pickup BLF","P581",2,"**");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Advanced","PUBLISH for Presence","","P588",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Advanced","Omit charset=UTF-8 in MESSAGE","","P2555",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Advanced","Special Feature","","P524",1,"100","Standard","101","Nortel MCS","102","Broadsoft","108","CBCOM","109","RNK","110","Sylantro","117","Huawei IMS","119","Phonepower");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Advanced","Broadsoft Call Center","","P2541",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Advanced","Hoteling Event","","P2542",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Advanced","Call Center Status","","P2543",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Advanced","Broadsoft Executive Assistant","","P2564",1,"0","Disabled","1","Enabled");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Advanced","Feature Key Synchronization","","P2525",1,"0","Disabled","1","Enabled");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Advanced","Broadsoft Call Park","","P2588",1,"0","Disabled","1","Enabled");
		
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Session Timer","Session Expiration (mins)","Min: 90, Max: 64800.","P534",2,"180");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Session Timer","Minimum SE (secs, lower than Session Exp.)","Min: 90, Max: 64800. Must be lower than the previous setting (Session Expiration).","P527",2,"90");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Session Timer","Caller Request Timer","Request for timer when calling.","P528",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Session Timer","Callee Request Timer","Request for timer when called, i.e. if remote party supports timer but did not request for one.","P529",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Session Timer","Force Timer","Force use of timer, even if remote party doesn't support it.","P530",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Session Timer","UAC Specify Refresher","","P532",1,"0","Omit","1","UAC","2","UAS");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Session Timer","UAS Specify Refresher","","P533",1,"1","UAC","2","UAS");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Session Timer","Force INVITE","Always refresh with INVITE instead of UPDATE even when remote party supports UPDATE.","P531",1,"0","No","1","Yes");
		
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Security","Check Domain Certificates","When set to Yes, domain certificates will be checked as defined in RFC5922.","P2511",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Security","Validate Certification Chain","","P2567",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Security","Validate Incoming Messages","","P2506",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Security","Check SIP User ID for Incoming INVITE","","P549",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Security","Accept Incoming SIP from Proxy Only","","P2547",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 3: SIP Settings/Security","Authenticate Incoming INVITE","","P2546",1,"0","No","1","Yes");
		
		load_device_default($con,$device_counter,"Account 3: Audio","Send DTMF: In-Audio","","P2501",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 3: Audio","Send DTMF: RTP (RFC2833)","","P2502",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Account 3: Audio","Send DTMF: SIP INFO","","P2503",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 3: Audio","DTMF Payload Type","Range: 96 - 127","P596",2,"101");
		load_device_default($con,$device_counter,"Account 3: Audio","Preferred Vocoder: Choice 1","","P551",1,"0","PCMU","2","G.726-32","8","PCMA","9","G.722","18","G.729A/B");
		load_device_default($con,$device_counter,"Account 3: Audio","Preferred Vocoder: Choice 2","","P552",1,"8","PCMA","0","PCMU","2","G.726-32","9","G.722","18","G.729A/B");
		load_device_default($con,$device_counter,"Account 3: Audio","Preferred Vocoder: Choice 3","","P553",1,"18","G.729A/B","0","PCMU","2","G.726-32","8","PCMA","9","G.722");
		load_device_default($con,$device_counter,"Account 3: Audio","Preferred Vocoder: Choice 4","","P554",1,"9","G.722","0","PCMU","2","G.726-32","8","PCMA","18","G.729A/B");
		load_device_default($con,$device_counter,"Account 3: Audio","Preferred Vocoder: Choice 5","","P555",1,"2","G.726-32","0","PCMU","8","PCMA","9","G.722","18","G.729A/B");
		load_device_default($con,$device_counter,"Account 3: Audio","Use First Matching Vocoder in 200 OK SDP","","P2548",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 3: Audio","Disable Multiple 'm' line in SDP","","P587",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 3: Audio","SRTP Mode","","P543",1,"0","Disabled","1","Enabled but not forced","2","Enabled and forced","3","Optional");
		load_device_default($con,$device_counter,"Account 3: Audio","Crypto Life Time","","P2563",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 3: Audio","Symmetric RTP","","P560",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 3: Audio","Silence Suppression","","P585",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 3: Audio","Voice Frames per TX","Range: 1 - 64","P586",2,"2");
		load_device_default($con,$device_counter,"Account 3: Audio","G.726-32 Packing Mode","","P2523",1,"0","ITU","1","IETF");
		load_device_default($con,$device_counter,"Account 3: Audio","Jitter Buffer Type","","P598",1,"1","Adaptive","0","Fixed");
		load_device_default($con,$device_counter,"Account 3: Audio","Jitter Buffer Length","","P597",1,"2","300ms","0","100ms","1","200ms","4","500ms","5","600ms","6","700ms","7","800ms");
		
		load_device_default($con,$device_counter,"Account 3: Call Settings","Early Dial","Use Yes if proxy supports 484 response.","P522",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 3: Call Settings","Dial Plan Prefix","Prefix to prepend to outgoing digits.","P519",2,"");
		load_device_default($con,$device_counter,"Account 3: Call Settings","Dial Plan","Consult the user manual for syntax.","P559",2,"{ x!PLUS! | *x!PLUS! | *xx*x!PLUS! }");
		load_device_default($con,$device_counter,"Account 3: Call Settings","Call Logging","","P542",1,"0","Log All Calls","1","Log incoming/outgoing (not missed calls)","2","Disable call logging");
		load_device_default($con,$device_counter,"Account 3: Call Settings","Account Ring Tone","","P523",1,"0","System ringtone","1","Custom tone 1","2","Custom tone 2","3","Custom tone 3");
		load_device_default($con,$device_counter,"Account 3: Call Settings","Matching Caller ID: Rule 1","","P1500",2,"");
		load_device_default($con,$device_counter,"Account 3: Call Settings","Matching CID Rule 1: Ringtone","If Caller ID Rule 1 matches, use this ringtone.","P1501",1,"0","System ringtone","1","Custom tone 1","2","Custom tone 2","3","Custom tone 3");
		load_device_default($con,$device_counter,"Account 3: Call Settings","Matching Caller ID: Rule 2","","P1502",2,"");
		load_device_default($con,$device_counter,"Account 3: Call Settings","Matching CID Rule 2: Ringtone","If Caller ID Rule 2 matches, use this ringtone.","P1503",1,"0","System ringtone","1","Custom tone 1","2","Custom tone 2","3","Custom tone 3");
		load_device_default($con,$device_counter,"Account 3: Call Settings","Matching Caller ID: Rule 3","","P1504",2,"");
		load_device_default($con,$device_counter,"Account 3: Call Settings","Matching CID Rule 3: Ringtone","If Caller ID Rule 3 matches, use this ringtone.","P1505",1,"0","System ringtone","1","Custom tone 1","2","Custom tone 2","3","Custom tone 3");
		load_device_default($con,$device_counter,"Account 3: Call Settings","Ring Timeout (secs)","Range: 30 - 3600","P576",2,"60");
		load_device_default($con,$device_counter,"Account 3: Call Settings","Send Anonymous","Outbound Caller ID will be blocked if set to yes)","P521",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 3: Call Settings","Anonymous Call Rejection","","P546",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 3: Call Settings","Auto Answer","","P525",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 3: Call Settings","Auto Answer by Call-Info","","P538",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 3: Call Settings","Barging by Call-Info","Barging: Taking over a call on this phone from another phone.","P26219",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 3: Call Settings","Custom Call-Info for Auto Answer","Custom info inside the header to auto-answer.","P2556",2,"");
		load_device_default($con,$device_counter,"Account 3: Call Settings","Refer-To Use Target Contact","","P569",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 3: Call Settings","Transfer on Conference Hangup","","P2504",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 3: Call Settings","Disable Recovery on Blind Transfer","","P2584",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 3: Call Settings","No Key Entry Timeout (secs)","Timeout to continue after last key press. Range: 1-15.","P591",2,"4");
		load_device_default($con,$device_counter,"Account 3: Call Settings","Use # as Dial Key","After dialing a number, instead of just waiting, you can hit # to send the digits.","P592",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Account 3: Call Settings","On Hold Reminder Tone","Remind the phone user that they have a call on hold.","P26206",1,"0","No","1","Yes");
		
		load_device_default($con,$device_counter,"Account 3: Feature Codes","Enable Call Features","Enable features like Forwarding, IP Calling, etc.","P520",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Account 3: Feature Codes","Do Not Disturb (DND) On","Dial this to turn on DND.","P2544",2,"");
		load_device_default($con,$device_counter,"Account 3: Feature Codes","Do Not Disturb (DND) Off","Dial this to turn of DND.","P2545",2,"");
		load_device_default($con,$device_counter,"Account 3: Feature Codes","Call Forward Unconditionally On","Dial this to turn on unconditional call forwarding.","P26213",2,"");
		load_device_default($con,$device_counter,"Account 3: Feature Codes","Call Forward Unconditionally Off","Dial this to turn off unconditional call forwarding.","P26214",2,"");
		load_device_default($con,$device_counter,"Account 3: Feature Codes","Call Forward if Busy On","Dial this to forward calls if already on a call.","P26209",2,"");
		load_device_default($con,$device_counter,"Account 3: Feature Codes","Call Forward if Busy Off","Dial this to disable forwarding calls if already on a call. (Make the caller wait for you to pick up).","P26210",2,"");
		load_device_default($con,$device_counter,"Account 3: Feature Codes","Call Forward if No Answer On","","P26211",2,"");
		load_device_default($con,$device_counter,"Account 3: Feature Codes","Call Forward if No Answer Off","","P26212",2,"");
		load_device_default($con,$device_counter,"Account 3: Feature Codes","Delayed Call Forward Wait Time (secs)","Delay before forwarding a call if not answered. Range: 1 - 120.","P570",2,"20");
				//GXP 2140 + 60 ONLY						####						###					###					###					###						####			###
		if ($device_counter>1)
		{
		load_device_default($con,$device_counter,"Account 4: General Settings","Account Active?","Mark this account as active or inactive.","P601",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Account 4: General Settings","Account Name","Name of the account, displayed on the phone.","P617",2,"");
		load_device_default($con,$device_counter,"Account 4: General Settings","SIP Server","Address of the SIP server/PBX.","P602",2,"");
		load_device_default($con,$device_counter,"Account 4: General Settings","Secondary SIP Server","Address of the Secondary SIP Server/PBX.","P2612",2,"");
		load_device_default($con,$device_counter,"Account 4: General Settings","Outbound Proxy","In case a proxy is used.","P603",2,"");
		load_device_default($con,$device_counter,"Account 4: General Settings","BLF Server","Only if you have a specific Busy Lamp Field server.","P2675",2,"");
		load_device_default($con,$device_counter,"Account 4: General Settings","SIP User ID","Usually the extension number.","P604",2,"");
		load_device_default($con,$device_counter,"Account 4: General Settings","Auth ID","Usually the extension number.","P605",2,"");
		load_device_default($con,$device_counter,"Account 4: General Settings","Auth Password","Password or secret set on the PBX.","P606",2,"");
		load_device_default($con,$device_counter,"Account 4: General Settings","Name","Name of the account, not displayed on the phone.","P607",2,"");
		load_device_default($con,$device_counter,"Account 4: General Settings","Voicemail UserID","Dial this to get voicemail. Asterisk is *97.","P626",2,"");
		load_device_default($con,$device_counter,"Account 4: General Settings","Show Account Name Only?","Select YES to only show the account name, no extension.","P2680",1,"0","No","1","Yes");
		
		load_device_default($con,$device_counter,"Account 4: Network Settings","DNS Mode","Set the DNS mode for the phone","P608",1,"0","A-Record","1","SRV","2","NAPTR/SRV","3","Use Configured IP");
		load_device_default($con,$device_counter,"Account 4: Network Settings","Primary IP","IP, max 15 characters (ipv4).","P2608",2,"");
		load_device_default($con,$device_counter,"Account 4: Network Settings","Backup IP 1","IP, max 15 characters (ipv4).","P2609",2,"");
		load_device_default($con,$device_counter,"Account 4: Network Settings","Backup IP 2","IP, max 15 characters (ipv4).","P2610",2,"");
		load_device_default($con,$device_counter,"Account 4: Network Settings","NAT Traversal","Settings for NAT.","P614",1,"0","No","1","STUN","2","Keep Alive","3","Auto","4","VPN");
		load_device_default($con,$device_counter,"Account 4: Network Settings","Proxy-Require","This is a SIP extension to enable firewall penetration. 64 character max.","P618",2,"");
		
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Basic","TEL URI","Used to interface with PSTN if no SIP server exists. Don't touch this...","P609",1,"0","Disabled","1","User=Phone","2","Enabled");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Basic","SIP Registration","Enable/Disable registration to the SIP server.","P610",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Basic","Unregister on Reboot","Expire current registration on the server if rebooted.","P611",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Basic","Register Expiration (mins)","Registration expiration time, in minutes. Max 64800.","P612",2,"60");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Basic","Register Before Expiration (secs)","Seconds before expiry to re-register. Max 64800.","P2630",2,"0");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Basic","Local SIP Port","Port for SIP communications.","P613",2,"5060");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Basic","SIP Registration Failure Retry Wait Time (secs)","In case of failure, wait this many seconds to retry registration. Max 3600","P671",2,"20");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Basic","SIP T1 Timeout","RFC3261 T1 Value (RTT Estimate)","P640",1,"50","0.5 Seconds","100","1 Second","200","2 Seconds");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Basic","SIP T2 Timeout","RFC3261 T2 Value: Maximum retransmit interval for non-INVITE requests and INVITE responses.","P641",1,"400","4 Seconds","200","2 Seconds","800","8 Seconds");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Basic","SIP Transport","Protocol for SIP data","P648",1,"0","UDP","1","TCP","2","TLS/TCP");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Basic","SIP URI Scheme when using TLS","URI Scheme to use when the connection uses TLS.","P2629",1,"1","SIPS","0","SIP");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Basic","Use Actual Ephemeral Port in Contact with TCP/TLS","This sounds complicated.","P2631",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Basic","Remove OBP from Route","Remove OBP from Route","P2605",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Basic","Support SIP Instance ID","Allow support for the SIP instance ID.","P689",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Basic","SUBSCRIBE for MWI","If Yes, Send SUBSCRIBE + NOTIFY. If no, only send NOTIFY. This is set in the PBX settings.","P615",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Basic","SUBSCRIBE for Registration","Send SUBSCRIBE prior to registering, if required.","P2619",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Basic","Enable 100rel","Enable 100rel","P635",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Basic","CallerID Display","How Caller ID should be extrapolated.","P2624",1,"0","Auto","1","Disabled","2","From header");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Basic","Use Privacy Header","Use Privacy Header","P2638",1,"0","Default","1","No","2","Yes");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Basic","Use P-Preferred-Identity Header","Use P-Preferred-Identity Header","P2639",1,"0","Default","1","No","2","Yes");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Basic","Add Auth Header on initial REGISTER","May be required if AUTH-ing registrations.","P2659",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Basic","Allow SIP Reset","Allow a SIP message to reset the device to factory defaults.","P26315",1,"0","No","1","Yes");
		
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Advanced","Line-Seize Timeout (secs)","Timeout before seizing the line. Max 60.","P2613",2,"15");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Advanced","Eventlist BLF URI","Eventlist BLF URI","P644",2,"");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Advanced","Auto Provision Eventlist BLFs","Auto Provision Eventlist BLFs","P2689",1,"0","Disabled","1","Enabled");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Advanced","Conference URI","Conference URI","P2618",2,"");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Advanced","Music On Hold URI","URI for MOH","P2650",2,"");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Advanced","Force BLF Call-pickup by Prefix","","P6755",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Advanced","BLF Call-pickup Prefix","Prefix for call-pickup BLF","P681",2,"**");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Advanced","PUBLISH for Presence","","P688",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Advanced","Omit charset=UTF-8 in MESSAGE","","P2655",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Advanced","Special Feature","","P624",1,"100","Standard","101","Nortel MCS","102","Broadsoft","108","CBCOM","109","RNK","110","Sylantro","117","Huawei IMS","119","Phonepower");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Advanced","Broadsoft Call Center","","P2641",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Advanced","Hoteling Event","","P2642",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Advanced","Call Center Status","","P2643",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Advanced","Broadsoft Executive Assistant","","P2664",1,"0","Disabled","1","Enabled");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Advanced","Feature Key Synchronization","","P2625",1,"0","Disabled","1","Enabled");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Advanced","Broadsoft Call Park","","P2688",1,"0","Disabled","1","Enabled");
		
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Session Timer","Session Expiration (mins)","Min: 90, Max: 64800.","P634",2,"180");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Session Timer","Minimum SE (secs, lower than Session Exp.)","Min: 90, Max: 64800. Must be lower than the previous setting (Session Expiration).","P627",2,"90");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Session Timer","Caller Request Timer","Request for timer when calling.","P628",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Session Timer","Callee Request Timer","Request for timer when called, i.e. if remote party supports timer but did not request for one.","P629",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Session Timer","Force Timer","Force use of timer, even if remote party doesn't support it.","P630",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Session Timer","UAC Specify Refresher","","P632",1,"0","Omit","1","UAC","2","UAS");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Session Timer","UAS Specify Refresher","","P633",1,"1","UAC","2","UAS");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Session Timer","Force INVITE","Always refresh with INVITE instead of UPDATE even when remote party supports UPDATE.","P631",1,"0","No","1","Yes");
		
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Security","Check Domain Certificates","When set to Yes, domain certificates will be checked as defined in RFC5922.","P2611",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Security","Validate Certification Chain","","P2667",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Security","Validate Incoming Messages","","P2606",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Security","Check SIP User ID for Incoming INVITE","","P649",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Security","Accept Incoming SIP from Proxy Only","","P2647",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 4: SIP Settings/Security","Authenticate Incoming INVITE","","P2646",1,"0","No","1","Yes");
		
		load_device_default($con,$device_counter,"Account 4: Audio","Send DTMF: In-Audio","","P2601",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 4: Audio","Send DTMF: RTP (RFC2833)","","P2602",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Account 4: Audio","Send DTMF: SIP INFO","","P2603",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 4: Audio","DTMF Payload Type","Range: 96 - 127","P696",2,"101");
		load_device_default($con,$device_counter,"Account 4: Audio","Preferred Vocoder: Choice 1","","P651",1,"0","PCMU","2","G.726-32","8","PCMA","9","G.722","18","G.729A/B");
		load_device_default($con,$device_counter,"Account 4: Audio","Preferred Vocoder: Choice 2","","P652",1,"8","PCMA","0","PCMU","2","G.726-32","9","G.722","18","G.729A/B");
		load_device_default($con,$device_counter,"Account 4: Audio","Preferred Vocoder: Choice 3","","P653",1,"18","G.729A/B","0","PCMU","2","G.726-32","8","PCMA","9","G.722");
		load_device_default($con,$device_counter,"Account 4: Audio","Preferred Vocoder: Choice 4","","P654",1,"9","G.722","0","PCMU","2","G.726-32","8","PCMA","18","G.729A/B");
		load_device_default($con,$device_counter,"Account 4: Audio","Preferred Vocoder: Choice 5","","P655",1,"2","G.726-32","0","PCMU","8","PCMA","9","G.722","18","G.729A/B");
		load_device_default($con,$device_counter,"Account 4: Audio","Use First Matching Vocoder in 200 OK SDP","","P2648",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 4: Audio","Disable Multiple 'm' line in SDP","","P687",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 4: Audio","SRTP Mode","","P643",1,"0","Disabled","1","Enabled but not forced","2","Enabled and forced","3","Optional");
		load_device_default($con,$device_counter,"Account 4: Audio","Crypto Life Time","","P2663",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 4: Audio","Symmetric RTP","","P660",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 4: Audio","Silence Suppression","","P685",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 4: Audio","Voice Frames per TX","Range: 1 - 64","P686",2,"2");
		load_device_default($con,$device_counter,"Account 4: Audio","G.726-32 Packing Mode","","P2623",1,"0","ITU","1","IETF");
		load_device_default($con,$device_counter,"Account 4: Audio","Jitter Buffer Type","","P698",1,"1","Adaptive","0","Fixed");
		load_device_default($con,$device_counter,"Account 4: Audio","Jitter Buffer Length","","P697",1,"2","300ms","0","100ms","1","200ms","4","500ms","5","600ms","6","700ms","7","800ms");
		
		load_device_default($con,$device_counter,"Account 4: Call Settings","Early Dial","Use Yes if proxy supports 484 response.","P622",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 4: Call Settings","Dial Plan Prefix","Prefix to prepend to outgoing digits.","P619",2,"");
		load_device_default($con,$device_counter,"Account 4: Call Settings","Dial Plan","Consult the user manual for syntax.","P659",2,"{ x!PLUS! | *x!PLUS! | *xx*x!PLUS! }");
		load_device_default($con,$device_counter,"Account 4: Call Settings","Call Logging","","P642",1,"0","Log All Calls","1","Log incoming/outgoing (not missed calls)","2","Disable call logging");
		load_device_default($con,$device_counter,"Account 4: Call Settings","Account Ring Tone","","P623",1,"0","System ringtone","1","Custom tone 1","2","Custom tone 2","3","Custom tone 3");
		load_device_default($con,$device_counter,"Account 4: Call Settings","Matching Caller ID: Rule 1","","P1506",2,"");
		load_device_default($con,$device_counter,"Account 4: Call Settings","Matching CID Rule 1: Ringtone","If Caller ID Rule 1 matches, use this ringtone.","P1507",1,"0","System ringtone","1","Custom tone 1","2","Custom tone 2","3","Custom tone 3");
		load_device_default($con,$device_counter,"Account 4: Call Settings","Matching Caller ID: Rule 2","","P1508",2,"");
		load_device_default($con,$device_counter,"Account 4: Call Settings","Matching CID Rule 2: Ringtone","If Caller ID Rule 2 matches, use this ringtone.","P1509",1,"0","System ringtone","1","Custom tone 1","2","Custom tone 2","3","Custom tone 3");
		load_device_default($con,$device_counter,"Account 4: Call Settings","Matching Caller ID: Rule 3","","P1510",2,"");
		load_device_default($con,$device_counter,"Account 4: Call Settings","Matching CID Rule 3: Ringtone","If Caller ID Rule 3 matches, use this ringtone.","P1511",1,"0","System ringtone","1","Custom tone 1","2","Custom tone 2","3","Custom tone 3");
		load_device_default($con,$device_counter,"Account 4: Call Settings","Ring Timeout (secs)","Range: 30 - 3600","P676",2,"60");
		load_device_default($con,$device_counter,"Account 4: Call Settings","Send Anonymous","Outbound Caller ID will be blocked if set to yes)","P621",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 4: Call Settings","Anonymous Call Rejection","","P646",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 4: Call Settings","Auto Answer","","P625",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 4: Call Settings","Auto Answer by Call-Info","","P638",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 4: Call Settings","Barging by Call-Info","Barging: Taking over a call on this phone from another phone.","P26319",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 4: Call Settings","Custom Call-Info for Auto Answer","Custom info inside the header to auto-answer.","P2656",2,"");
		load_device_default($con,$device_counter,"Account 4: Call Settings","Refer-To Use Target Contact","","P669",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 4: Call Settings","Transfer on Conference Hangup","","P2604",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 4: Call Settings","Disable Recovery on Blind Transfer","","P2684",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 4: Call Settings","No Key Entry Timeout (secs)","Timeout to continue after last key press. Range: 1-15.","P691",2,"4");
		load_device_default($con,$device_counter,"Account 4: Call Settings","Use # as Dial Key","After dialing a number, instead of just waiting, you can hit # to send the digits.","P692",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Account 4: Call Settings","On Hold Reminder Tone","Remind the phone user that they have a call on hold.","P26306",1,"0","No","1","Yes");
		
		load_device_default($con,$device_counter,"Account 4: Feature Codes","Enable Call Features","Enable features like Forwarding, IP Calling, etc.","P620",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Account 4: Feature Codes","Do Not Disturb (DND) On","Dial this to turn on DND.","P2644",2,"");
		load_device_default($con,$device_counter,"Account 4: Feature Codes","Do Not Disturb (DND) Off","Dial this to turn of DND.","P2645",2,"");
		load_device_default($con,$device_counter,"Account 4: Feature Codes","Call Forward Unconditionally On","Dial this to turn on unconditional call forwarding.","P26313",2,"");
		load_device_default($con,$device_counter,"Account 4: Feature Codes","Call Forward Unconditionally Off","Dial this to turn off unconditional call forwarding.","P26314",2,"");
		load_device_default($con,$device_counter,"Account 4: Feature Codes","Call Forward if Busy On","Dial this to forward calls if already on a call.","P26309",2,"");
		load_device_default($con,$device_counter,"Account 4: Feature Codes","Call Forward if Busy Off","Dial this to disable forwarding calls if already on a call. (Make the caller wait for you to pick up).","P26310",2,"");
		load_device_default($con,$device_counter,"Account 4: Feature Codes","Call Forward if No Answer On","","P26311",2,"");
		load_device_default($con,$device_counter,"Account 4: Feature Codes","Call Forward if No Answer Off","","P26312",2,"");
		load_device_default($con,$device_counter,"Account 4: Feature Codes","Delayed Call Forward Wait Time (secs)","Delay before forwarding a call if not answered. Range: 1 - 120.","P670",2,"20");
				//GXP 2160	 ONLY						####						###					###					###					###						####			###
		if ($device_counter==3)
		{
		load_device_default($con,$device_counter,"Account 5: General Settings","Account Active?","Mark this account as active or inactive.","P1701",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Account 5: General Settings","Account Name","Name of the account, displayed on the phone.","P1717",2,"");
		load_device_default($con,$device_counter,"Account 5: General Settings","SIP Server","Address of the SIP server/PBX.","P1702",2,"");
		load_device_default($con,$device_counter,"Account 5: General Settings","Secondary SIP Server","Address of the Secondary SIP Server/PBX.","P2712",2,"");
		load_device_default($con,$device_counter,"Account 5: General Settings","Outbound Proxy","In case a proxy is used.","P1703",2,"");
		load_device_default($con,$device_counter,"Account 5: General Settings","BLF Server","Only if you have a specific Busy Lamp Field server.","P2775",2,"");
		load_device_default($con,$device_counter,"Account 5: General Settings","SIP User ID","Usually the extension number.","P1704",2,"");
		load_device_default($con,$device_counter,"Account 5: General Settings","Auth ID","Usually the extension number.","P1705",2,"");
		load_device_default($con,$device_counter,"Account 5: General Settings","Auth Password","Password or secret set on the PBX.","P1706",2,"");
		load_device_default($con,$device_counter,"Account 5: General Settings","Name","Name of the account, not displayed on the phone.","P1707",2,"");
		load_device_default($con,$device_counter,"Account 5: General Settings","Voicemail UserID","Dial this to get voicemail. Asterisk is *97.","P1726",2,"");
		load_device_default($con,$device_counter,"Account 5: General Settings","Show Account Name Only?","Select YES to only show the account name, no extension.","P2780",1,"0","No","1","Yes");	//GUESS????
		
		load_device_default($con,$device_counter,"Account 5: Network Settings","DNS Mode","Set the DNS mode for the phone","P1708",1,"0","A-Record","1","SRV","2","NAPTR/SRV","3","Use Configured IP");
		load_device_default($con,$device_counter,"Account 5: Network Settings","Primary IP","IP, max 15 characters (ipv4).","P2708",2,"");
		load_device_default($con,$device_counter,"Account 5: Network Settings","Backup IP 1","IP, max 15 characters (ipv4).","P2709",2,"");
		load_device_default($con,$device_counter,"Account 5: Network Settings","Backup IP 2","IP, max 15 characters (ipv4).","P2710",2,"");
		load_device_default($con,$device_counter,"Account 5: Network Settings","NAT Traversal","Settings for NAT.","P1714",1,"0","No","1","STUN","2","Keep Alive","3","Auto","4","VPN");
		load_device_default($con,$device_counter,"Account 5: Network Settings","Proxy-Require","This is a SIP extension to enable firewall penetration. 64 character max.","P1718",2,"");
		
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Basic","TEL URI","Used to interface with PSTN if no SIP server exists. Don't touch this...","P1709",1,"0","Disabled","1","User=Phone","2","Enabled");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Basic","SIP Registration","Enable/Disable registration to the SIP server.","P1710",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Basic","Unregister on Reboot","Expire current registration on the server if rebooted.","P1711",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Basic","Register Expiration (mins)","Registration expiration time, in minutes. Max 64800.","P1712",2,"60");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Basic","Register Before Expiration (secs)","Seconds before expiry to re-register. Max 64800.","P2730",2,"0");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Basic","Local SIP Port","Port for SIP communications.","P1713",2,"5060");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Basic","SIP Registration Failure Retry Wait Time (secs)","In case of failure, wait this many seconds to retry registration. Max 3600","P1771",2,"20");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Basic","SIP T1 Timeout","RFC3261 T1 Value (RTT Estimate)","P1740",1,"50","0.5 Seconds","100","1 Second","200","2 Seconds");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Basic","SIP T2 Timeout","RFC3261 T2 Value: Maximum retransmit interval for non-INVITE requests and INVITE responses.","P1741",1,"400","4 Seconds","200","2 Seconds","800","8 Seconds");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Basic","SIP Transport","Protocol for SIP data","P1748",1,"0","UDP","1","TCP","2","TLS/TCP");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Basic","SIP URI Scheme when using TLS","URI Scheme to use when the connection uses TLS.","P2729",1,"1","SIPS","0","SIP");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Basic","Use Actual Ephemeral Port in Contact with TCP/TLS","This sounds complicated.","P2731",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Basic","Remove OBP from Route","Remove OBP from Route","P2705",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Basic","Support SIP Instance ID","Allow support for the SIP instance ID.","P1789",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Basic","SUBSCRIBE for MWI","If Yes, Send SUBSCRIBE + NOTIFY. If no, only send NOTIFY. This is set in the PBX settings.","P1715",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Basic","SUBSCRIBE for Registration","Send SUBSCRIBE prior to registering, if required.","P2719",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Basic","Enable 100rel","Enable 100rel","P1735",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Basic","CallerID Display","How Caller ID should be extrapolated.","P2724",1,"0","Auto","1","Disabled","2","From header");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Basic","Use Privacy Header","Use Privacy Header","P2738",1,"0","Default","1","No","2","Yes");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Basic","Use P-Preferred-Identity Header","Use P-Preferred-Identity Header","P2739",1,"0","Default","1","No","2","Yes");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Basic","Add Auth Header on initial REGISTER","May be required if AUTH-ing registrations.","P2759",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Basic","Allow SIP Reset","Allow a SIP message to reset the device to factory defaults.","P26415",1,"0","No","1","Yes");
		
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Advanced","Line-Seize Timeout (secs)","Timeout before seizing the line. Max 60.","P2713",2,"15");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Advanced","Eventlist BLF URI","Eventlist BLF URI","P1744",2,"");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Advanced","Auto Provision Eventlist BLFs","Auto Provision Eventlist BLFs","P2789",1,"0","Disabled","1","Enabled");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Advanced","Conference URI","Conference URI","P2718",2,"");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Advanced","Music On Hold URI","URI for MOH","P2750",2,"");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Advanced","Force BLF Call-pickup by Prefix","","P6756",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Advanced","BLF Call-pickup Prefix","Prefix for call-pickup BLF","P1781",2,"**");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Advanced","PUBLISH for Presence","","P1788",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Advanced","Omit charset=UTF-8 in MESSAGE","","P2755",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Advanced","Special Feature","","P1724",1,"100","Standard","101","Nortel MCS","102","Broadsoft","108","CBCOM","109","RNK","110","Sylantro","117","Huawei IMS","119","Phonepower");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Advanced","Broadsoft Call Center","","P2741",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Advanced","Hoteling Event","","P2742",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Advanced","Call Center Status","","P2743",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Advanced","Broadsoft Executive Assistant","","P2764",1,"0","Disabled","1","Enabled");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Advanced","Feature Key Synchronization","","P2725",1,"0","Disabled","1","Enabled");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Advanced","Broadsoft Call Park","","P2788",1,"0","Disabled","1","Enabled");
		
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Session Timer","Session Expiration (mins)","Min: 90, Max: 64800.","P1734",2,"180");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Session Timer","Minimum SE (secs, lower than Session Exp.)","Min: 90, Max: 64800. Must be lower than the previous setting (Session Expiration).","P1727",2,"90");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Session Timer","Caller Request Timer","Request for timer when calling.","P1728",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Session Timer","Callee Request Timer","Request for timer when called, i.e. if remote party supports timer but did not request for one.","P1729",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Session Timer","Force Timer","Force use of timer, even if remote party doesn't support it.","P1730",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Session Timer","UAC Specify Refresher","","P1732",1,"0","Omit","1","UAC","2","UAS");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Session Timer","UAS Specify Refresher","","P1733",1,"1","UAC","2","UAS");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Session Timer","Force INVITE","Always refresh with INVITE instead of UPDATE even when remote party supports UPDATE.","P1731",1,"0","No","1","Yes");
		
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Security","Check Domain Certificates","When set to Yes, domain certificates will be checked as defined in RFC5922.","P2711",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Security","Validate Certification Chain","","P2767",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Security","Validate Incoming Messages","","P2706",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Security","Check SIP User ID for Incoming INVITE","","P1749",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Security","Accept Incoming SIP from Proxy Only","","P2747",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 5: SIP Settings/Security","Authenticate Incoming INVITE","","P2746",1,"0","No","1","Yes");
		
		load_device_default($con,$device_counter,"Account 5: Audio","Send DTMF: In-Audio","","P2701",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 5: Audio","Send DTMF: RTP (RFC2833)","","P2702",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Account 5: Audio","Send DTMF: SIP INFO","","P2703",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 5: Audio","DTMF Payload Type","Range: 96 - 127","P1796",2,"101");
		load_device_default($con,$device_counter,"Account 5: Audio","Preferred Vocoder: Choice 1","","P1751",1,"0","PCMU","2","G.726-32","8","PCMA","9","G.722","18","G.729A/B");
		load_device_default($con,$device_counter,"Account 5: Audio","Preferred Vocoder: Choice 2","","P1752",1,"8","PCMA","0","PCMU","2","G.726-32","9","G.722","18","G.729A/B");
		load_device_default($con,$device_counter,"Account 5: Audio","Preferred Vocoder: Choice 3","","P1753",1,"18","G.729A/B","0","PCMU","2","G.726-32","8","PCMA","9","G.722");
		load_device_default($con,$device_counter,"Account 5: Audio","Preferred Vocoder: Choice 4","","P1754",1,"9","G.722","0","PCMU","2","G.726-32","8","PCMA","18","G.729A/B");
		load_device_default($con,$device_counter,"Account 5: Audio","Preferred Vocoder: Choice 5","","P1755",1,"2","G.726-32","0","PCMU","8","PCMA","9","G.722","18","G.729A/B");
		load_device_default($con,$device_counter,"Account 5: Audio","Use First Matching Vocoder in 200 OK SDP","","P2748",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 5: Audio","Disable Multiple 'm' line in SDP","","P1787",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 5: Audio","SRTP Mode","","P1743",1,"0","Disabled","1","Enabled but not forced","2","Enabled and forced","3","Optional");
		load_device_default($con,$device_counter,"Account 5: Audio","Crypto Life Time","","P2763",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 5: Audio","Symmetric RTP","","P1760",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 5: Audio","Silence Suppression","","P1785",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 5: Audio","Voice Frames per TX","Range: 1 - 64","P1786",2,"2");
		load_device_default($con,$device_counter,"Account 5: Audio","G.726-32 Packing Mode","","P2723",1,"0","ITU","1","IETF");
		load_device_default($con,$device_counter,"Account 5: Audio","Jitter Buffer Type","","P1798",1,"1","Adaptive","0","Fixed");
		load_device_default($con,$device_counter,"Account 5: Audio","Jitter Buffer Length","","P1797",1,"2","300ms","0","100ms","1","200ms","4","500ms","5","600ms","6","700ms","7","800ms");
		
		load_device_default($con,$device_counter,"Account 5: Call Settings","Early Dial","Use Yes if proxy supports 484 response.","P1722",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 5: Call Settings","Dial Plan Prefix","Prefix to prepend to outgoing digits.","P1719",2,"");
		load_device_default($con,$device_counter,"Account 5: Call Settings","Dial Plan","Consult the user manual for syntax.","P1759",2,"{ x!PLUS! | *x!PLUS! | *xx*x!PLUS! }");
		load_device_default($con,$device_counter,"Account 5: Call Settings","Call Logging","","P1742",1,"0","Log All Calls","1","Log incoming/outgoing (not missed calls)","2","Disable call logging");
		load_device_default($con,$device_counter,"Account 5: Call Settings","Account Ring Tone","","P1723",1,"0","System ringtone","1","Custom tone 1","2","Custom tone 2","3","Custom tone 3");
		load_device_default($con,$device_counter,"Account 5: Call Settings","Matching Caller ID: Rule 1","","P1512",2,"");
		load_device_default($con,$device_counter,"Account 5: Call Settings","Matching CID Rule 1: Ringtone","If Caller ID Rule 1 matches, use this ringtone.","P1513",1,"0","System ringtone","1","Custom tone 1","2","Custom tone 2","3","Custom tone 3");
		load_device_default($con,$device_counter,"Account 5: Call Settings","Matching Caller ID: Rule 2","","P1514",2,"");
		load_device_default($con,$device_counter,"Account 5: Call Settings","Matching CID Rule 2: Ringtone","If Caller ID Rule 2 matches, use this ringtone.","P1515",1,"0","System ringtone","1","Custom tone 1","2","Custom tone 2","3","Custom tone 3");
		load_device_default($con,$device_counter,"Account 5: Call Settings","Matching Caller ID: Rule 3","","P1516",2,"");
		load_device_default($con,$device_counter,"Account 5: Call Settings","Matching CID Rule 3: Ringtone","If Caller ID Rule 3 matches, use this ringtone.","P1517",1,"0","System ringtone","1","Custom tone 1","2","Custom tone 2","3","Custom tone 3");
		load_device_default($con,$device_counter,"Account 5: Call Settings","Ring Timeout (secs)","Range: 30 - 3600","P1776",2,"60");
		load_device_default($con,$device_counter,"Account 5: Call Settings","Send Anonymous","Outbound Caller ID will be blocked if set to yes)","P1721",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 5: Call Settings","Anonymous Call Rejection","","P1746",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 5: Call Settings","Auto Answer","","P1725",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 5: Call Settings","Auto Answer by Call-Info","","P1738",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 5: Call Settings","Barging by Call-Info","Barging: Taking over a call on this phone from another phone.","P26419",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 5: Call Settings","Custom Call-Info for Auto Answer","Custom info inside the header to auto-answer.","P2756",2,"");
		load_device_default($con,$device_counter,"Account 5: Call Settings","Refer-To Use Target Contact","","P1769",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 5: Call Settings","Transfer on Conference Hangup","","P2704",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 5: Call Settings","Disable Recovery on Blind Transfer","","P2784",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 5: Call Settings","No Key Entry Timeout (secs)","Timeout to continue after last key press. Range: 1-15.","P1791",2,"4");
		load_device_default($con,$device_counter,"Account 5: Call Settings","Use # as Dial Key","After dialing a number, instead of just waiting, you can hit # to send the digits.","P1792",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Account 5: Call Settings","On Hold Reminder Tone","Remind the phone user that they have a call on hold.","P26406",1,"0","No","1","Yes");
		
		load_device_default($con,$device_counter,"Account 5: Feature Codes","Enable Call Features","Enable features like Forwarding, IP Calling, etc.","P1720",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Account 5: Feature Codes","Do Not Disturb (DND) On","Dial this to turn on DND.","P2744",2,"");
		load_device_default($con,$device_counter,"Account 5: Feature Codes","Do Not Disturb (DND) Off","Dial this to turn of DND.","P2745",2,"");
		load_device_default($con,$device_counter,"Account 5: Feature Codes","Call Forward Unconditionally On","Dial this to turn on unconditional call forwarding.","P26413",2,"");
		load_device_default($con,$device_counter,"Account 5: Feature Codes","Call Forward Unconditionally Off","Dial this to turn off unconditional call forwarding.","P26414",2,"");
		load_device_default($con,$device_counter,"Account 5: Feature Codes","Call Forward if Busy On","Dial this to forward calls if already on a call.","P26409",2,""); //26409, doc says 509
		load_device_default($con,$device_counter,"Account 5: Feature Codes","Call Forward if Busy Off","Dial this to disable forwarding calls if already on a call. (Make the caller wait for you to pick up).","P26410",2,"");
		load_device_default($con,$device_counter,"Account 5: Feature Codes","Call Forward if No Answer On","","P26411",2,"");
		load_device_default($con,$device_counter,"Account 5: Feature Codes","Call Forward if No Answer Off","","P26412",2,"");
		load_device_default($con,$device_counter,"Account 5: Feature Codes","Delayed Call Forward Wait Time (secs)","Delay before forwarding a call if not answered. Range: 1 - 120.","P1770",2,"20");
		
		load_device_default($con,$device_counter,"Account 6: General Settings","Account Active?","Mark this account as active or inactive.","P1801",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Account 6: General Settings","Account Name","Name of the account, displayed on the phone.","P1817",2,"");
		load_device_default($con,$device_counter,"Account 6: General Settings","SIP Server","Address of the SIP server/PBX.","P1802",2,"");
		load_device_default($con,$device_counter,"Account 6: General Settings","Secondary SIP Server","Address of the Secondary SIP Server/PBX.","P2812",2,"");
		load_device_default($con,$device_counter,"Account 6: General Settings","Outbound Proxy","In case a proxy is used.","P1803",2,"");
		load_device_default($con,$device_counter,"Account 6: General Settings","BLF Server","Only if you have a specific Busy Lamp Field server.","P2875",2,"");
		load_device_default($con,$device_counter,"Account 6: General Settings","SIP User ID","Usually the extension number.","P1804",2,"");
		load_device_default($con,$device_counter,"Account 6: General Settings","Auth ID","Usually the extension number.","P1805",2,"");
		load_device_default($con,$device_counter,"Account 6: General Settings","Auth Password","Password or secret set on the PBX.","P1806",2,"");
		load_device_default($con,$device_counter,"Account 6: General Settings","Name","Name of the account, not displayed on the phone.","P1807",2,"");
		load_device_default($con,$device_counter,"Account 6: General Settings","Voicemail UserID","Dial this to get voicemail. Asterisk is *97.","P1826",2,"");
		load_device_default($con,$device_counter,"Account 6: General Settings","Show Account Name Only?","Select YES to only show the account name, no extension.","P2880",1,"0","No","1","Yes");	//GUESS????
		
		load_device_default($con,$device_counter,"Account 6: Network Settings","DNS Mode","Set the DNS mode for the phone","P1808",1,"0","A-Record","1","SRV","2","NAPTR/SRV","3","Use Configured IP");
		load_device_default($con,$device_counter,"Account 6: Network Settings","Primary IP","IP, max 15 characters (ipv4).","P2808",2,"");
		load_device_default($con,$device_counter,"Account 6: Network Settings","Backup IP 1","IP, max 15 characters (ipv4).","P2809",2,"");
		load_device_default($con,$device_counter,"Account 6: Network Settings","Backup IP 2","IP, max 15 characters (ipv4).","P2810",2,"");
		load_device_default($con,$device_counter,"Account 6: Network Settings","NAT Traversal","Settings for NAT.","P1814",1,"0","No","1","STUN","2","Keep Alive","3","Auto","4","VPN");
		load_device_default($con,$device_counter,"Account 6: Network Settings","Proxy-Require","This is a SIP extension to enable firewall penetration. 64 character max.","P1818",2,"");
		
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Basic","TEL URI","Used to interface with PSTN if no SIP server exists. Don't touch this...","P1809",1,"0","Disabled","1","User=Phone","2","Enabled");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Basic","SIP Registration","Enable/Disable registration to the SIP server.","P1810",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Basic","Unregister on Reboot","Expire current registration on the server if rebooted.","P1811",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Basic","Register Expiration (mins)","Registration expiration time, in minutes. Max 64800.","P1812",2,"60");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Basic","Register Before Expiration (secs)","Seconds before expiry to re-register. Max 64800.","P2830",2,"0");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Basic","Local SIP Port","Port for SIP communications.","P1813",2,"5060");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Basic","SIP Registration Failure Retry Wait Time (secs)","In case of failure, wait this many seconds to retry registration. Max 3600","P1871",2,"20");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Basic","SIP T1 Timeout","RFC3261 T1 Value (RTT Estimate)","P1840",1,"50","0.5 Seconds","100","1 Second","200","2 Seconds");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Basic","SIP T2 Timeout","RFC3261 T2 Value: Maximum retransmit interval for non-INVITE requests and INVITE responses.","P1841",1,"400","4 Seconds","200","2 Seconds","800","8 Seconds");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Basic","SIP Transport","Protocol for SIP data","P1848",1,"0","UDP","1","TCP","2","TLS/TCP");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Basic","SIP URI Scheme when using TLS","URI Scheme to use when the connection uses TLS.","P2829",1,"1","SIPS","0","SIP");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Basic","Use Actual Ephemeral Port in Contact with TCP/TLS","This sounds complicated.","P2831",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Basic","Remove OBP from Route","Remove OBP from Route","P2805",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Basic","Support SIP Instance ID","Allow support for the SIP instance ID.","P1889",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Basic","SUBSCRIBE for MWI","If Yes, Send SUBSCRIBE + NOTIFY. If no, only send NOTIFY. This is set in the PBX settings.","P1815",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Basic","SUBSCRIBE for Registration","Send SUBSCRIBE prior to registering, if required.","P2819",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Basic","Enable 100rel","Enable 100rel","P1835",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Basic","CallerID Display","How Caller ID should be extrapolated.","P2824",1,"0","Auto","1","Disabled","2","From header");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Basic","Use Privacy Header","Use Privacy Header","P2838",1,"0","Default","1","No","2","Yes");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Basic","Use P-Preferred-Identity Header","Use P-Preferred-Identity Header","P2839",1,"0","Default","1","No","2","Yes");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Basic","Add Auth Header on initial REGISTER","May be required if AUTH-ing registrations.","P2859",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Basic","Allow SIP Reset","Allow a SIP message to reset the device to factory defaults.","P26515",1,"0","No","1","Yes");
		
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Advanced","Line-Seize Timeout (secs)","Timeout before seizing the line. Max 60.","P2813",2,"15");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Advanced","Eventlist BLF URI","Eventlist BLF URI","P1844",2,"");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Advanced","Auto Provision Eventlist BLFs","Auto Provision Eventlist BLFs","P2889",1,"0","Disabled","1","Enabled");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Advanced","Conference URI","Conference URI","P2818",2,"");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Advanced","Music On Hold URI","URI for MOH","P2850",2,"");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Advanced","Force BLF Call-pickup by Prefix","","P6757",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Advanced","BLF Call-pickup Prefix","Prefix for call-pickup BLF","P1881",2,"**");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Advanced","PUBLISH for Presence","","P1888",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Advanced","Omit charset=UTF-8 in MESSAGE","","P2855",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Advanced","Special Feature","","P1824",1,"100","Standard","101","Nortel MCS","102","Broadsoft","108","CBCOM","109","RNK","110","Sylantro","117","Huawei IMS","119","Phonepower");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Advanced","Broadsoft Call Center","","P2841",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Advanced","Hoteling Event","","P2842",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Advanced","Call Center Status","","P2843",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Advanced","Broadsoft Executive Assistant","","P2864",1,"0","Disabled","1","Enabled");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Advanced","Feature Key Synchronization","","P2825",1,"0","Disabled","1","Enabled");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Advanced","Broadsoft Call Park","","P2888",1,"0","Disabled","1","Enabled");
		
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Session Timer","Session Expiration (mins)","Min: 90, Max: 64800.","P1834",2,"180");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Session Timer","Minimum SE (secs, lower than Session Exp.)","Min: 90, Max: 64800. Must be lower than the previous setting (Session Expiration).","P1827",2,"90");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Session Timer","Caller Request Timer","Request for timer when calling.","P1828",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Session Timer","Callee Request Timer","Request for timer when called, i.e. if remote party supports timer but did not request for one.","P1829",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Session Timer","Force Timer","Force use of timer, even if remote party doesn't support it.","P1830",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Session Timer","UAC Specify Refresher","","P1832",1,"0","Omit","1","UAC","2","UAS");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Session Timer","UAS Specify Refresher","","P1833",1,"1","UAC","2","UAS");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Session Timer","Force INVITE","Always refresh with INVITE instead of UPDATE even when remote party supports UPDATE.","P1831",1,"0","No","1","Yes");
		
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Security","Check Domain Certificates","When set to Yes, domain certificates will be checked as defined in RFC5922.","P2811",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Security","Validate Certification Chain","","P2867",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Security","Validate Incoming Messages","","P2806",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Security","Check SIP User ID for Incoming INVITE","","P1849",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Security","Accept Incoming SIP from Proxy Only","","P2847",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 6: SIP Settings/Security","Authenticate Incoming INVITE","","P2846",1,"0","No","1","Yes");
		
		load_device_default($con,$device_counter,"Account 6: Audio","Send DTMF: In-Audio","","P2801",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 6: Audio","Send DTMF: RTP (RFC2833)","","P2802",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Account 6: Audio","Send DTMF: SIP INFO","","P2803",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 6: Audio","DTMF Payload Type","Range: 96 - 127","P1896",2,"101");
		load_device_default($con,$device_counter,"Account 6: Audio","Preferred Vocoder: Choice 1","","P1851",1,"0","PCMU","2","G.726-32","8","PCMA","9","G.722","18","G.729A/B");
		load_device_default($con,$device_counter,"Account 6: Audio","Preferred Vocoder: Choice 2","","P1852",1,"8","PCMA","0","PCMU","2","G.726-32","9","G.722","18","G.729A/B");
		load_device_default($con,$device_counter,"Account 6: Audio","Preferred Vocoder: Choice 3","","P1853",1,"18","G.729A/B","0","PCMU","2","G.726-32","8","PCMA","9","G.722");
		load_device_default($con,$device_counter,"Account 6: Audio","Preferred Vocoder: Choice 4","","P1854",1,"9","G.722","0","PCMU","2","G.726-32","8","PCMA","18","G.729A/B");
		load_device_default($con,$device_counter,"Account 6: Audio","Preferred Vocoder: Choice 5","","P1855",1,"2","G.726-32","0","PCMU","8","PCMA","9","G.722","18","G.729A/B");
		load_device_default($con,$device_counter,"Account 6: Audio","Use First Matching Vocoder in 200 OK SDP","","P2848",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 6: Audio","Disable Multiple 'm' line in SDP","","P1887",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 6: Audio","SRTP Mode","","P1843",1,"0","Disabled","1","Enabled but not forced","2","Enabled and forced","3","Optional");
		load_device_default($con,$device_counter,"Account 6: Audio","Crypto Life Time","","P2863",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 6: Audio","Symmetric RTP","","P1860",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 6: Audio","Silence Suppression","","P1885",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 6: Audio","Voice Frames per TX","Range: 1 - 64","P1886",2,"2");
		load_device_default($con,$device_counter,"Account 6: Audio","G.726-32 Packing Mode","","P2823",1,"0","ITU","1","IETF");
		load_device_default($con,$device_counter,"Account 6: Audio","Jitter Buffer Type","","P1898",1,"1","Adaptive","0","Fixed");
		load_device_default($con,$device_counter,"Account 6: Audio","Jitter Buffer Length","","P1897",1,"2","300ms","0","100ms","1","200ms","4","500ms","5","600ms","6","700ms","7","800ms");
		
		load_device_default($con,$device_counter,"Account 6: Call Settings","Early Dial","Use Yes if proxy supports 484 response.","P1822",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 6: Call Settings","Dial Plan Prefix","Prefix to prepend to outgoing digits.","P1819",2,"");
		load_device_default($con,$device_counter,"Account 6: Call Settings","Dial Plan","Consult the user manual for syntax.","P1859",2,"{ x!PLUS! | *x!PLUS! | *xx*x!PLUS! }");
		load_device_default($con,$device_counter,"Account 6: Call Settings","Call Logging","","P1842",1,"0","Log All Calls","1","Log incoming/outgoing (not missed calls)","2","Disable call logging");
		load_device_default($con,$device_counter,"Account 6: Call Settings","Account Ring Tone","","P1823",1,"0","System ringtone","1","Custom tone 1","2","Custom tone 2","3","Custom tone 3");
		load_device_default($con,$device_counter,"Account 6: Call Settings","Matching Caller ID: Rule 1","","P1518",2,"");
		load_device_default($con,$device_counter,"Account 6: Call Settings","Matching CID Rule 1: Ringtone","If Caller ID Rule 1 matches, use this ringtone.","P1519",1,"0","System ringtone","1","Custom tone 1","2","Custom tone 2","3","Custom tone 3");
		load_device_default($con,$device_counter,"Account 6: Call Settings","Matching Caller ID: Rule 2","","P1520",2,"");
		load_device_default($con,$device_counter,"Account 6: Call Settings","Matching CID Rule 2: Ringtone","If Caller ID Rule 2 matches, use this ringtone.","P1521",1,"0","System ringtone","1","Custom tone 1","2","Custom tone 2","3","Custom tone 3");
		load_device_default($con,$device_counter,"Account 6: Call Settings","Matching Caller ID: Rule 3","","P1522",2,"");
		load_device_default($con,$device_counter,"Account 6: Call Settings","Matching CID Rule 3: Ringtone","If Caller ID Rule 3 matches, use this ringtone.","P1523",1,"0","System ringtone","1","Custom tone 1","2","Custom tone 2","3","Custom tone 3");
		load_device_default($con,$device_counter,"Account 6: Call Settings","Ring Timeout (secs)","Range: 30 - 3600","P1876",2,"60");
		load_device_default($con,$device_counter,"Account 6: Call Settings","Send Anonymous","Outbound Caller ID will be blocked if set to yes)","P1821",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 6: Call Settings","Anonymous Call Rejection","","P1846",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 6: Call Settings","Auto Answer","","P1825",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 6: Call Settings","Auto Answer by Call-Info","","P1838",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 6: Call Settings","Barging by Call-Info","Barging: Taking over a call on this phone from another phone.","P26519",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 6: Call Settings","Custom Call-Info for Auto Answer","Custom info inside the header to auto-answer.","P2856",2,"");
		load_device_default($con,$device_counter,"Account 6: Call Settings","Refer-To Use Target Contact","","P1869",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 6: Call Settings","Transfer on Conference Hangup","","P2804",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 6: Call Settings","Disable Recovery on Blind Transfer","","P2884",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Account 6: Call Settings","No Key Entry Timeout (secs)","Timeout to continue after last key press. Range: 1-15.","P1891",2,"4");
		load_device_default($con,$device_counter,"Account 6: Call Settings","Use # as Dial Key","After dialing a number, instead of just waiting, you can hit # to send the digits.","P1892",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Account 6: Call Settings","On Hold Reminder Tone","Remind the phone user that they have a call on hold.","P26506",1,"0","No","1","Yes");
		
		load_device_default($con,$device_counter,"Account 6: Feature Codes","Enable Call Features","Enable features like Forwarding, IP Calling, etc.","P1820",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Account 6: Feature Codes","Do Not Disturb (DND) On","Dial this to turn on DND.","P2844",2,"");
		load_device_default($con,$device_counter,"Account 6: Feature Codes","Do Not Disturb (DND) Off","Dial this to turn of DND.","P2845",2,"");
		load_device_default($con,$device_counter,"Account 6: Feature Codes","Call Forward Unconditionally On","Dial this to turn on unconditional call forwarding.","P26513",2,"");
		load_device_default($con,$device_counter,"Account 6: Feature Codes","Call Forward Unconditionally Off","Dial this to turn off unconditional call forwarding.","P26514",2,"");
		load_device_default($con,$device_counter,"Account 6: Feature Codes","Call Forward if Busy On","Dial this to forward calls if already on a call.","P26509",2,""); //26409, doc says 509
		load_device_default($con,$device_counter,"Account 6: Feature Codes","Call Forward if Busy Off","Dial this to disable forwarding calls if already on a call. (Make the caller wait for you to pick up).","P26510",2,"");
		load_device_default($con,$device_counter,"Account 6: Feature Codes","Call Forward if No Answer On","","P26511",2,"");
		load_device_default($con,$device_counter,"Account 6: Feature Codes","Call Forward if No Answer Off","","P26512",2,"");
		load_device_default($con,$device_counter,"Account 6: Feature Codes","Delayed Call Forward Wait Time (secs)","Delay before forwarding a call if not answered. Range: 1 - 120.","P1870",2,"20");
		} //End GXP2160 only
		} //End GXP2140 and GXP2160 only
	
		load_device_default($con,$device_counter,"Network/Basic","Internet Protocol","Set the preferred IP method.","P1415",1,"0","Prefer IPv4","1","Prefer IPv6");
		load_device_default($con,$device_counter,"Network/Basic","IP Address Mode","","P8",1,"0","DHCP","1","Static IP","2","PPPoE");
		load_device_default($con,$device_counter,"Network/Basic","Host Name","The softname that shows up on routers and network scans. Max 64 chars.","P146",2,"");
		load_device_default($con,$device_counter,"Network/Basic","Vendor Class ID","","P148",2,"IP Phone/Device");
		load_device_default($con,$device_counter,"Network/Basic","PPPoE Account ID","","P82",2,"");
		load_device_default($con,$device_counter,"Network/Basic","PPPoE Password","Cannot contain ` or \"","P83",2,"");
		load_device_default($con,$device_counter,"Network/Basic","PPPoE Service Name","","P269",2,"");
		load_device_default($con,$device_counter,"Network/Basic","IP Address: Part 1","","P9",2,"192");
		load_device_default($con,$device_counter,"Network/Basic","IP Address: Part 2","","P10",2,"168");
		load_device_default($con,$device_counter,"Network/Basic","IP Address: Part 3","","P11",2,"0");
		load_device_default($con,$device_counter,"Network/Basic","IP Address: Part 4","","P12",2,"160");
		load_device_default($con,$device_counter,"Network/Basic","Netmask: Part 1","","P13",2,"255");
		load_device_default($con,$device_counter,"Network/Basic","Netmask: Part 2","","P14",2,"255");
		load_device_default($con,$device_counter,"Network/Basic","Netmask: Part 3","","P15",2,"255");
		load_device_default($con,$device_counter,"Network/Basic","Netmask: Part 4","","P16",2,"255");
		load_device_default($con,$device_counter,"Network/Basic","Gateway: Part 1","","P17",2,"0");
		load_device_default($con,$device_counter,"Network/Basic","Gateway: Part 2","","P18",2,"0");
		load_device_default($con,$device_counter,"Network/Basic","Gateway: Part 3","","P19",2,"0");
		load_device_default($con,$device_counter,"Network/Basic","Gateway: Part 4","","P20",2,"0");
		load_device_default($con,$device_counter,"Network/Basic","Primary DNS: Part 1","","P21",2,"0");
		load_device_default($con,$device_counter,"Network/Basic","Primary DNS: Part 2","","P22",2,"0");
		load_device_default($con,$device_counter,"Network/Basic","Primary DNS: Part 3","","P23",2,"0");
		load_device_default($con,$device_counter,"Network/Basic","Primary DNS: Part 4","","P24",2,"0");
		load_device_default($con,$device_counter,"Network/Basic","Secondary DNS: Part 1","","P25",2,"0");
		load_device_default($con,$device_counter,"Network/Basic","Secondary DNS: Part 2","","P26",2,"0");
		load_device_default($con,$device_counter,"Network/Basic","Secondary DNS: Part 3","","P27",2,"0");
		load_device_default($con,$device_counter,"Network/Basic","Secondary DNS: Part 4","","P28",2,"0");
		load_device_default($con,$device_counter,"Network/Basic","Preferred DNS: Part 1","","P92",2,"0");
		load_device_default($con,$device_counter,"Network/Basic","Preferred DNS: Part 2","","P93",2,"0");
		load_device_default($con,$device_counter,"Network/Basic","Preferred DNS: Part 3","","P94",2,"0");
		load_device_default($con,$device_counter,"Network/Basic","Preferred DNS: Part 4","","P95",2,"0");
		load_device_default($con,$device_counter,"Network/Basic","IPv6 Address Type","","P1419",1,"0","Auto Configured","1","Statically Configured");
		load_device_default($con,$device_counter,"Network/Basic","IPv6 Primary DNS","","P1424",2,"");
		load_device_default($con,$device_counter,"Network/Basic","IPv6 Secondary DNS","","P1425",2,"");
		load_device_default($con,$device_counter,"Network/Basic","IPv6 Preferred DNS","","P1423",2,"");
		load_device_default($con,$device_counter,"Network/Basic","IPv6 Static Type","Decide between Full or Prefix","P1426",1,"0","Full Static","1","Prefix Static");
		load_device_default($con,$device_counter,"Network/Basic","IPv6 Full Static Address","Desired static IPv6 address","P1420",2,"");
		load_device_default($con,$device_counter,"Network/Basic","IPv6 Full Static Prefix Length","Length of the prefix is full static.","P1421",2,"");
		load_device_default($con,$device_counter,"Network/Basic","IPv6 Prefix Static Prefix","The prefix, if set to a prefix-based IPv6 address. 64-bits.","P1422",2,"");
		
		load_device_default($con,$device_counter,"Network/Advanced","802.1X Mode","","P7901",1,"0","Disabled","1","EAP-MD5");
		load_device_default($con,$device_counter,"Network/Advanced","802.1X Identity","Max: 64 chars","P7902",2,"");
		load_device_default($con,$device_counter,"Network/Advanced","MD5 Password","Max: 64 chars","P7903",2,"");
		load_device_default($con,$device_counter,"Network/Advanced","HTTP Proxy","","P1552",2,"");
		load_device_default($con,$device_counter,"Network/Advanced","HTTPS Proxy","","P1553",2,"");
		load_device_default($con,$device_counter,"Network/Advanced","Layer 3 QoS for SIP","Range: 0 - 63","P1558",2,"26");
		load_device_default($con,$device_counter,"Network/Advanced","Layer 3 QoS for RTP","Range: 0 - 63","P1559",2,"46");
		load_device_default($con,$device_counter,"Network/Advanced","Layer 2 QoS: 802.1Q/VLAN Tag","VLAN Classification for RTP. Range: 0 - 4094","P51",2,"0");
		load_device_default($con,$device_counter,"Network/Advanced","Layer 2 QoS: 802.1p Priority Value","Range: 0 - 7","P87",2,"0");
		load_device_default($con,$device_counter,"Network/Advanced","PC Port Mode","Mirrored: ALL packets to the IP phone are also sent to the PC port, for sniffing.","P1348",1,"0","Enabled","1","Disabled","2","Mirrored");
		load_device_default($con,$device_counter,"Network/Advanced","PC Port VLAN Tag","Range: 0 - 4094","P229",2,"0");
		load_device_default($con,$device_counter,"Network/Advanced","PC Port Priority Value","Range: 0 - 7","P230",2,"0");
		load_device_default($con,$device_counter,"Network/Advanced","Enable LLDP","","P1684",1,"1","Enabled","0","Disabled");
		
		load_device_default($con,$device_counter,"Maintenance/Web Access","End User Password","Password to Web GUI for regular user. a-z, A-Z, 0-9","P196",2,"");
		load_device_default($con,$device_counter,"Maintenance/Web Access","Admin Password","Password to Web GUI for admin. a-z, A-Z, 0-9","P2",2,"");
		
		load_device_default($con,$device_counter,"Maintenance/Upgrade and Provisioning","Firmware Upgrade and Provisioning","","P238",1,"0","Always check for new firmware","1","Check for new F/W only when prefix/suffix changes","2","Always skip F/W check");
		load_device_default($con,$device_counter,"Maintenance/Upgrade and Provisioning","XML Config Password","","P1359",2,"");
		load_device_default($con,$device_counter,"Maintenance/Upgrade and Provisioning","HTTP/HTTPS Username","","P1360",2,"");
		load_device_default($con,$device_counter,"Maintenance/Upgrade and Provisioning","HTTP/HTTPS Password","","P1361",2,"");
		load_device_default($con,$device_counter,"Maintenance/Upgrade and Provisioning","Always Authenticate Before Challenge","","P20713",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Maintenance/Upgrade and Provisioning","Upgrade Via...","","P212",1,"1","HTTP","0","TFTP","2","HTTPS");
		load_device_default($con,$device_counter,"Maintenance/Upgrade and Provisioning","Firmware Server Path","","P192",2,"");
		load_device_default($con,$device_counter,"Maintenance/Upgrade and Provisioning","Config Server Path","","P237",2,"");
		load_device_default($con,$device_counter,"Maintenance/Upgrade and Provisioning","Firmware File Prefix","","P232",2,"");
		load_device_default($con,$device_counter,"Maintenance/Upgrade and Provisioning","Firmware File Postfix","","P233",2,"");
		load_device_default($con,$device_counter,"Maintenance/Upgrade and Provisioning","Config File Prefix","","P234",2,"");
		load_device_default($con,$device_counter,"Maintenance/Upgrade and Provisioning","Config File Postfix","","P235",2,"");
		load_device_default($con,$device_counter,"Maintenance/Upgrade and Provisioning","Allow DHCP 43 and 66 Override Server","","P145",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Maintenance/Upgrade and Provisioning","Allow DHCP 120 Override SIP Server","","P1411",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Maintenance/Upgrade and Provisioning","3CX Auto Provision","","P1414",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Maintenance/Upgrade and Provisioning","Automatic Upgrade","","P194",1,"0","No","1","Yes: Check for upgrade based on Minutes setting","2","Yes: Check for upgrade based on Hour of Day setting","3","Yes: Check for upgrade based on Day of Week setting");
		load_device_default($con,$device_counter,"Maintenance/Upgrade and Provisioning","Check for Firmware Minutes Interval","Range: 60 - 86400","P193",2,"10080");
		load_device_default($con,$device_counter,"Maintenance/Upgrade and Provisioning","Check for Firmware Hour of Day","Range: 0 - 23","P285",2,"1");
		load_device_default($con,$device_counter,"Maintenance/Upgrade and Provisioning","Check for Firmware Day of Week","Range: 0 - 6","P286",2,"1");
		load_device_default($con,$device_counter,"Maintenance/Upgrade and Provisioning","Disable SIP NOTIFY Authentication","","P4428",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Maintenance/Upgrade and Provisioning","Authenticate Conf File","","P240",1,"0","No","1","Yes");
		
		load_device_default($con,$device_counter,"Maintenance/Syslog","Syslog Server","Max: 64 chars","P207",2,"");
		load_device_default($con,$device_counter,"Maintenance/Syslog","Syslog Level","","P208",1,"0","None","1","Debug","2","Info","3","Warning","4","Error");
		load_device_default($con,$device_counter,"Maintenance/Syslog","Send SIP Log","Syslog level needs to be set to Debug to see the SIP log.","P1387",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Maintenance/Syslog","Auto Recover From Abnormal Operation","","P1438",1,"1","Yes","0","No");
		
		load_device_default($con,$device_counter,"Maintenance/Language","Display Language","ar=Arabic, cz=Czech, de=Deutsh, en=English, es=Spanish, fr=Francais, he=Hebrew, hr=Hrvatski, hu=Magyar, it=Italiano, ja=Japanese, ko=Korean, nl=Dutch, pl=Polski, pt=Portugue, ru=Russian, sl=Slovenian, sv=Svenska, tr=Turkish, zh-tw=Traditional Chinese, zh=Simplified Chinese, auto=Automatic","P1362",2,"auto");
		load_device_default($con,$device_counter,"Maintenance/Language","Default Input Selection","","P2920",1,"0","Multi-Tap","1","Shiftable");
		load_device_default($con,$device_counter,"Maintenance/Language","Auto Language Download","","P2961",1,"0","Yes","1","No");
		
		load_device_default($con,$device_counter,"Maintenance/TR-069","ACS URL","","P4503",2,"");
		load_device_default($con,$device_counter,"Maintenance/TR-069","TR-069 Username","","P4504",2,"");
		load_device_default($con,$device_counter,"Maintenance/TR-069","TR-069 Password","","P4505",2,"");
		load_device_default($con,$device_counter,"Maintenance/TR-069","Periodic Inform Enabled","","P4506",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Maintenance/TR-069","Periodic Inform Interval","","P4507",2,"");
		load_device_default($con,$device_counter,"Maintenance/TR-069","Connection Request Username","","P4511",2,"");
		load_device_default($con,$device_counter,"Maintenance/TR-069","Connection Request Password","","P4512",2,"");
		load_device_default($con,$device_counter,"Maintenance/TR-069","Connection Request Port","","P4518",2,"");
		load_device_default($con,$device_counter,"Maintenance/TR-069","CPE SSL Certificate","","P8220",2,"");
		load_device_default($con,$device_counter,"Maintenance/TR-069","CPE SSL Private Key","","P8221",2,"");
		
		load_device_default($con,$device_counter,"Maintenance/Security Settings/Security","Configuration via Keypad Menu","","P1357",1,"0","Unrestricted","1","Basic Settings","2","Constraint Mode");
		load_device_default($con,$device_counter,"Maintenance/Security Settings/Security","Enable STAR Keypad Locking","","P1382",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Maintenance/Security Settings/Security","Password to Lock/Unlock","Chars: 0 to 9 (numbers) only","P1383",2,"");
		load_device_default($con,$device_counter,"Maintenance/Security Settings/Security","SIP TLS Certificate","a-z, A-Z, 0-9","P280",2,"");
		load_device_default($con,$device_counter,"Maintenance/Security Settings/Security","SIP TLS Private Key","a-z, A-Z, 0-9","P279",2,"");
		load_device_default($con,$device_counter,"Maintenance/Security Settings/Security","SIP TLS Private Key Password","a-z, A-Z, 0-9","P281",2,"");
		load_device_default($con,$device_counter,"Maintenance/Security Settings/Security","Web Access Mode","","P1650",1,"1","HTTP","0","HTTP");
		load_device_default($con,$device_counter,"Maintenance/Security Settings/Security","Disable SSH","","P276",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Maintenance/Security Settings/Security","Web/Keypad/Restrict Mode Lockout Duration (mins)","Range: 0 - 60","P1683",2,"5");
		
		load_device_default($con,$device_counter,"Maintenance/Packet Capture","With RTP Packets","","P6007",1,"0","No","1","Yes");
		if ($device_counter>1)
		{
			load_device_default($con,$device_counter,"Maintenance/Packet Capture","Capture Location","","P2999",1,"0","Internal Storage","1","USB");//2140/60 only
			load_device_default($con,$device_counter,"Maintenance/Packet Capture","USB Filename","","P6008",2,"");//2140/60 only
		}
		
		load_device_default($con,$device_counter,"Phonebook/Phonebook Management","Enable Phonebook XML Download","","P330",1,"0","Disabled","1","Enabled, HTTP","2","Enabled, TFTP","3","Enabled, HTTPS");
		load_device_default($con,$device_counter,"Phonebook/Phonebook Management","HTTP/HTTPS Username","","P6713",2,"");
		load_device_default($con,$device_counter,"Phonebook/Phonebook Management","HTTP/HTTPS Password","","P6714",2,"");
		load_device_default($con,$device_counter,"Phonebook/Phonebook Management","Phonebook XML Server Path","Format: Host/path. Like google.com/phonebooks","P331",2,"");
		load_device_default($con,$device_counter,"Phonebook/Phonebook Management","Phonebook Download Interval (mins)","Range: 5 - 720, 0 = disabled","P332",2,"0");
		load_device_default($con,$device_counter,"Phonebook/Phonebook Management","Remove Manually-Edited Entries on Download","","P333",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Phonebook/Phonebook Management","Sort Phonebook By...","","P2914",1,"0","Last Name","1","First Name");
		load_device_default($con,$device_counter,"Phonebook/Phonebook Management","Phonebook Key Function","","P1526",1,"0","Default","1","LDAP Search","2","Local Phonebook","3","Local Group","4","Broadsoft Phonebook");
		load_device_default($con,$device_counter,"Phonebook/Phonebook Management","Default Search Mode","","P2970",1,"0","Quick match","1","Exact match");
		
		load_device_default($con,$device_counter,"Phonebook/LDAP","LDAP Protocol","","P8037",1,"0","LDAP","1","LDAPS");
		load_device_default($con,$device_counter,"Phonebook/LDAP","LDAP Server Address","Up to 256 chars. IP or domain name.","P8020",2,"");
		load_device_default($con,$device_counter,"Phonebook/LDAP","LDAP Server Port","Default: 389. Range: 1 - 65535","P8021",2,"389");
		load_device_default($con,$device_counter,"Phonebook/LDAP","Search Base","Location in the directory where the search is requested to begin.","P8022",2,"");
		load_device_default($con,$device_counter,"Phonebook/LDAP","Username","","P8023",2,"");
		load_device_default($con,$device_counter,"Phonebook/LDAP","Password","","P8024",2,"");
		load_device_default($con,$device_counter,"Phonebook/LDAP","LDAP Number Filter","","P8025",2,"");
		load_device_default($con,$device_counter,"Phonebook/LDAP","LDAP Name Filter","","P8026",2,"");
		load_device_default($con,$device_counter,"Phonebook/LDAP","LDAP Version","","P8027",1,"3","Version 3","2","Version 2");
		load_device_default($con,$device_counter,"Phonebook/LDAP","LDAP Name Attributes","","P8028",2,"");
		load_device_default($con,$device_counter,"Phonebook/LDAP","LDAP Number Attributes","","P8029",2,"");
		load_device_default($con,$device_counter,"Phonebook/LDAP","LDAP Display Name","","P8030",2,"");
		load_device_default($con,$device_counter,"Phonebook/LDAP","Max Hits","Range: 0 - 32000","P8031",2,"50");
		load_device_default($con,$device_counter,"Phonebook/LDAP","Search Timeout (secs)","Range: 0 - 180","P8032",2,"30");
		load_device_default($con,$device_counter,"Phonebook/LDAP","Sort Results","","P8033",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Phonebook/LDAP","LDAP Lookup, Incoming Calls","","P8035",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Phonebook/LDAP","LDAP Lookup, Outgoing Calls","","P8034",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Phonebook/LDAP","Lookup Display Name","","P8036",2,"");
		
		load_device_default($con,$device_counter,"Settings/General","Local RTP Port","Default: 5004","P39",2,"5004");
		load_device_default($con,$device_counter,"Settings/General","Use Random Port","","P78",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Settings/General","Keep-Alive Interval (secs)","Default: 20","P84",2,"20");
		load_device_default($con,$device_counter,"Settings/General","Use NAT IP","Use this IP in the SIP/SDP message instead of the default IP.","P101",2,"");
		load_device_default($con,$device_counter,"Settings/General","STUN Server","Server address to use for STUN","P76",2,"");
		load_device_default($con,$device_counter,"Settings/General","Public Mode","","P1345",1,"0","No","1","Yes");
		
		load_device_default($con,$device_counter,"Settings/Call Features","Off-Hook Auto Dial","Number/Extension to dial once off-hook","P71",2,"");
		load_device_default($con,$device_counter,"Settings/Call Features","Off-Hook Timeout (secs)","Range: 10 - 30","P1485",2,"30");
		load_device_default($con,$device_counter,"Settings/Call Features","Bypass Dial Plan Through Call History and Directories","","P6758",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Settings/Call Features","Disable Call Waiting","","P91",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Settings/Call Features","Disable Call-Waiting Tone","","P186",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Settings/Call Features","Disable Busy Tone on Remote Disconnect","","P6762",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Settings/Call Features","Disable Direct IP Call","","P1310",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Settings/Call Features","Use Quick IP Call Mode","","P184",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Settings/Call Features","Disable Conference","","P1311",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Settings/Call Features","Disable In-Call DTMF Display","","P338",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Settings/Call Features","Enable Sending DTMF via Specific MPKs","","P1339",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Settings/Call Features","Mute Key Functions While Idle","","P1565",1,"0","Do Not Disturb","1","Idle Mute","2","Disabled");
		load_device_default($con,$device_counter,"Settings/Call Features","Disable Transfer","","P1341",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Settings/Call Features","In-Call Dial Number on Pressing Transfer Key","","P1525",2,"");
		load_device_default($con,$device_counter,"Settings/Call Features","Auto-Attended Transfer","","P1376",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Settings/Call Features","Do Not Escape '#' as 23% in SIP URL","","P1406",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Settings/Call Features","Click-To-Dial Feature","","P1561",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Settings/Call Features","Write Timeout (secs)","0 = Disabled. Range: 30 - 3600","P1433",2,"300");
		load_device_default($con,$device_counter,"Settings/Call Features","Max Unsaved Log","Range: 0 - 500","P1434",2,"200");
		load_device_default($con,$device_counter,"Settings/Call Features","Default Call Log Type","","P6765",1,"0","Default","1","Broadsoft Call Log","2","Local Call Log");
		load_device_default($con,$device_counter,"Settings/Call Features","Local Call Recording Feature","","P6760",1,"0","Disable","1","Enabled");
		load_device_default($con,$device_counter,"Settings/Call Features","Saved Local Call Recording Location","","P6761",1,"0","Internal Storage","1","USB");
		
		load_device_default($con,$device_counter,"Settings/Multicast Paging","Paging Parge","Barge if the priority is set to...","P1566",1,"0","Disabled","1","Priority 1","2","Priority 2","3","Priority 3","4","Priority 4","5","Priority 5","6","Priority 6","7","Priority 7","8","Priority 8","9","Priority 9","10","Priority 10");
		load_device_default($con,$device_counter,"Settings/Multicast Paging","Paging Priority Active","Use Paging Priority?","P1567",1,"0","Disabled","1","Enabled");
		load_device_default($con,$device_counter,"Settings/Multicast Paging","Paging Priority Active","Multicast Paging Codec","P1568",1,"0","PCMU","1","8","PCMA","2","G.726-32","9","G.722","98","iLBC","18","G.729A/B");
		load_device_default($con,$device_counter,"Settings/Multicast Paging","Priority 1 Address","","P1569",2,"");
		load_device_default($con,$device_counter,"Settings/Multicast Paging","Priority 1 Label","","P1570",2,"");
		load_device_default($con,$device_counter,"Settings/Multicast Paging","Priority 2 Address","","P1571",2,"");
		load_device_default($con,$device_counter,"Settings/Multicast Paging","Priority 2 Label","","P1572",2,"");
		load_device_default($con,$device_counter,"Settings/Multicast Paging","Priority 3 Address","","P1573",2,"");
		load_device_default($con,$device_counter,"Settings/Multicast Paging","Priority 3 Label","","P1574",2,"");
		load_device_default($con,$device_counter,"Settings/Multicast Paging","Priority 4 Address","","P1575",2,"");
		load_device_default($con,$device_counter,"Settings/Multicast Paging","Priority 4 Label","","P1576",2,"");
		load_device_default($con,$device_counter,"Settings/Multicast Paging","Priority 5 Address","","P1577",2,"");
		load_device_default($con,$device_counter,"Settings/Multicast Paging","Priority 5 Label","","P1578",2,"");
		load_device_default($con,$device_counter,"Settings/Multicast Paging","Priority 6 Address","","P1579",2,"");
		load_device_default($con,$device_counter,"Settings/Multicast Paging","Priority 6 Label","","P1580",2,"");
		load_device_default($con,$device_counter,"Settings/Multicast Paging","Priority 7 Address","","P1581",2,"");
		load_device_default($con,$device_counter,"Settings/Multicast Paging","Priority 7 Label","","P1582",2,"");
		load_device_default($con,$device_counter,"Settings/Multicast Paging","Priority 8 Address","","P1583",2,"");
		load_device_default($con,$device_counter,"Settings/Multicast Paging","Priority 8 Label","","P1584",2,"");
		load_device_default($con,$device_counter,"Settings/Multicast Paging","Priority 9 Address","","P1585",2,"");
		load_device_default($con,$device_counter,"Settings/Multicast Paging","Priority 9 Label","","P1586",2,"");
		load_device_default($con,$device_counter,"Settings/Multicast Paging","Priority 10 Address","","P1587",2,"");
		load_device_default($con,$device_counter,"Settings/Multicast Paging","Priority 10 Label","","P1588",2,"");
		
		load_device_default($con,$device_counter,"Settings/Ring Tone","System Ring Tone","Syntax: f1=val,f2=val[,c=on1/off1[-on2/off2[-on3/off3]]]; (Frequencies are in Hz and cadence on and off are in 10ms)","P345",2,"f1=440,f2=480,c=200/400;"); //f1=560,f2=520,c=45/20-45/175;
		load_device_default($con,$device_counter,"Settings/Ring Tone","Dial Tone","Syntax: f1=val,f2=val[,c=on1/off1[-on2/off2[-on3/off3]]]; (Frequencies are in Hz and cadence on and off are in 10ms)","P343",2,"f1=350,f2=440;");
		load_device_default($con,$device_counter,"Settings/Ring Tone","Second Dial Tone","Syntax: f1=val,f2=val[,c=on1/off1[-on2/off2[-on3/off3]]]; (Frequencies are in Hz and cadence on and off are in 10ms)","P2909",2,"f1=350,f2=440;");
		load_device_default($con,$device_counter,"Settings/Ring Tone","Message Waiting Tone","Syntax: f1=val,f2=val[,c=on1/off1[-on2/off2[-on3/off3]]]; (Frequencies are in Hz and cadence on and off are in 10ms)","P344",2,"f1=350,f2=440,c=10/10;");
		load_device_default($con,$device_counter,"Settings/Ring Tone","Ring Back Tone","Syntax: f1=val,f2=val[,c=on1/off1[-on2/off2[-on3/off3]]]; (Frequencies are in Hz and cadence on and off are in 10ms)","P346",2,"f1=440,f2=480,c=200/400;");
		load_device_default($con,$device_counter,"Settings/Ring Tone","Call Waiting Tone","Syntax: f1=val,f2=val[,c=on1/off1[-on2/off2[-on3/off3]]]; (Frequencies are in Hz and cadence on and off are in 10ms)","P347",2,"f1=440,f2=440,c=25/525;");
		load_device_default($con,$device_counter,"Settings/Ring Tone","Call Waiting Tone Gain","Syntax: f1=val,f2=val[,c=on1/off1[-on2/off2[-on3/off3]]]; (Frequencies are in Hz and cadence on and off are in 10ms)","P1555",1,"0","Low","1","Medium","2","High");
		load_device_default($con,$device_counter,"Settings/Ring Tone","Busy Tone","Syntax: f1=val,f2=val[,c=on1/off1[-on2/off2[-on3/off3]]]; (Frequencies are in Hz and cadence on and off are in 10ms)","P348",2,"f1=480,f2=620,c=50/50;");
		load_device_default($con,$device_counter,"Settings/Ring Tone","Reorder Tone","Syntax: f1=val,f2=val[,c=on1/off1[-on2/off2[-on3/off3]]]; (Frequencies are in Hz and cadence on and off are in 10ms)","P349",2,"f1=480,f2=620,c=25/25;");
		
		load_device_default($con,$device_counter,"Settings/Audio Control","Headset Key Mode","","P1312",1,"0","Default","1","Toggle Headset/Speaker");
		load_device_default($con,$device_counter,"Settings/Audio Control","Headset Type","","P1487",1,"0","Normal","1","Plantronics EHS");
		load_device_default($con,$device_counter,"Settings/Audio Control","Always Ring Speaker","","P1439",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Settings/Audio Control","Headset TX Gain","","P1301",1,"0","0db","1","-6db","2","+6db");
		load_device_default($con,$device_counter,"Settings/Audio Control","Headset RX Gain","","P1302",1,"0","0db","1","-6db","2","+6db");
		load_device_default($con,$device_counter,"Settings/Audio Control","Handset TX Gain","","P1464",1,"0","0db","1","-6db","2","+6db");
		
		load_device_default($con,$device_counter,"Settings/LCD Display","Backlight Brightness","Active Brightness Range: 10 - 100","P334",2,"100");
		load_device_default($con,$device_counter,"Settings/LCD Display","Idle Brightness","Idle Brightness Range: 10 - 100","P335",2,"60");
		load_device_default($con,$device_counter,"Settings/LCD Display","Disable Missed Call Backlight","","P351",1,"0","No","1","Yes");
		load_device_default($con,$device_counter,"Settings/LCD Display","Wallpaper Settings","","P2916",1,"0","Default","1","Downloaded","2","USB","3","Uploaded");
		load_device_default($con,$device_counter,"Settings/LCD Display","Wallpaper Server Path","Full path to file, like domain.com/backgrounds/phone.jpg","P2917",2,"");
		load_device_default($con,$device_counter,"Settings/LCD Display","Screensaver Enabled","","P2918",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Settings/LCD Display","Screensaver Source","","P6759",1,"0","Default","1","USB");
		load_device_default($con,$device_counter,"Settings/LCD Display","Screensaver Timeout","Minutes before launching screen saver. Range: 3 - 60","P2919",2,"3");

		load_device_default($con,$device_counter,"Settings/LED Control","BLF LED Pattern","","P6766",1,"0","Default","1","Analog","2","Directional","3","Reserved (Red)","4","Reserved (Green)","5","Inverse");
		
		load_device_default($con,$device_counter,"Settings/Date and Time","NTP Server","","P30",2,"us.pool.ntp.org");
		load_device_default($con,$device_counter,"Settings/Date and Time","NTP Update Interval (mins)","Range: 5 - 1440","P5005",2,"1440");
		load_device_default($con,$device_counter,"Settings/Date and Time","Option 42 Overrides NTP Server","","P144",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Settings/Date and Time","Time Zone","","P64",1,"auto","Automatic","customize","Self-Defined");
		load_device_default($con,$device_counter,"Settings/Date and Time","Option 2 Overrides Time Zone","","P143",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Settings/Date and Time","Self-Defined Time Zone","","P246",2,"MTZ+6MDT+5,M4.1.0,M11.1.0");
		load_device_default($con,$device_counter,"Settings/Date and Time","Date Display Format","","P102",1,"0","yyyy-mm-dd","1","mm-dd-yyyy","2","dd-mm-yyyy","3","dddd, MMMM dd","4","MMMM dd, dddd");
		load_device_default($con,$device_counter,"Settings/Date and Time","Time Display Format","","P122",1,"0","12-Hour","1","24-Hour");
		
		load_device_default($con,$device_counter,"Settings/Web Service","Weather Update","","P1402",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Settings/Web Service","Weather City Code","","P1405",1,"1","Automatic","0","Self-Defined");
		load_device_default($con,$device_counter,"Settings/Web Service","Self-Defined City Code","This is just your ZIP code","P1377",2,"");
		load_device_default($con,$device_counter,"Settings/Web Service","Update Interval (mins)","Range: 5 - 360","P1378",2,"15");
		load_device_default($con,$device_counter,"Settings/Web Service","Degree Unit","","P1379",1,"auto","Automatic","f","Fahrenheit","c","Celsius");
		load_device_default($con,$device_counter,"Settings/Web Service","Currency Update","","P1404",1,"1","Yes","0","No");
		load_device_default($con,$device_counter,"Settings/Web Service","Currency Code","","P1381",2,"EUR/USD;GBP/USD;CAD/USD;AUD/USD;CNY/USD;JPY/USD");
		
		load_device_default($con,$device_counter,"Settings/XML Applications","Server Path","Full server path to application. XML-only, can be PHP-generated.","P337",2,"");
		load_device_default($con,$device_counter,"Settings/XML Applications","Softkey Label","","P352",2,"XMLApp");
		
		load_device_default($con,$device_counter,"Settings/Broadsoft XSI","Server Address","","P1591",2,"");
		load_device_default($con,$device_counter,"Settings/Broadsoft XSI","Port","","P1592",2,"");
		load_device_default($con,$device_counter,"Settings/Broadsoft XSI","Username","","P1593",2,"");
		load_device_default($con,$device_counter,"Settings/Broadsoft XSI","Password","","P1594",2,"");
		load_device_default($con,$device_counter,"Settings/Broadsoft XSI","Group Directory","","P2971",1,"0","Disabled","1","Enabled");
		load_device_default($con,$device_counter,"Settings/Broadsoft XSI","Group Directory Name","","P2972",2,"");
		load_device_default($con,$device_counter,"Settings/Broadsoft XSI","Enterprise Directory","","P2973",1,"0","Disabled","1","Enabled");
		load_device_default($con,$device_counter,"Settings/Broadsoft XSI","Enterprise Directory Name","","P2974",2,"");
		load_device_default($con,$device_counter,"Settings/Broadsoft XSI","Group Common","","P2975",1,"0","Disabled","1","Enabled");
		load_device_default($con,$device_counter,"Settings/Broadsoft XSI","Group Common Name","","P2976",2,"");
		load_device_default($con,$device_counter,"Settings/Broadsoft XSI","Enterprise Common","","P2977",1,"0","Disabled","1","Enabled");
		load_device_default($con,$device_counter,"Settings/Broadsoft XSI","Enterprise Common Name","","P2978",2,"");
		load_device_default($con,$device_counter,"Settings/Broadsoft XSI","Personal Directory","","P2979",1,"0","Disabled","1","Enabled");
		load_device_default($con,$device_counter,"Settings/Broadsoft XSI","Personal Directory Name","","P2980",2,"");
		load_device_default($con,$device_counter,"Settings/Broadsoft XSI","Missed Call Log","","P2981",1,"0","Disabled","1","Enabled");
		load_device_default($con,$device_counter,"Settings/Broadsoft XSI","Missed Call Log Name","","P2982",2,"");
		load_device_default($con,$device_counter,"Settings/Broadsoft XSI","Placed Call Log","","P2983",1,"0","Disabled","1","Enabled");
		load_device_default($con,$device_counter,"Settings/Broadsoft XSI","Placed Call Log Name","","P2984",2,"");
		load_device_default($con,$device_counter,"Settings/Broadsoft XSI","Received Call Log","","P2985",1,"0","Disabled","1","Enabled");
		load_device_default($con,$device_counter,"Settings/Broadsoft XSI","Received Call Log Name","","P2986",2,"");
		
		load_device_default($con,$device_counter,"Settings/Broadsoft IM&P","Server Address","","P6006",2,"");
		load_device_default($con,$device_counter,"Settings/Broadsoft IM&P","Port","","P6005",2,"");
		load_device_default($con,$device_counter,"Settings/Broadsoft IM&P","Username","","P2966",2,"");
		load_device_default($con,$device_counter,"Settings/Broadsoft IM&P","Password","","P2967",2,"");
		load_device_default($con,$device_counter,"Settings/Broadsoft IM&P","IM&P State","","P2964",1,"0","Disabled","1","Enabled");
		load_device_default($con,$device_counter,"Settings/Broadsoft IM&P","Associated Broadsoft Account","","P2965",1,"0","Non","1","Account 1","2","Account 2","3","Account 3","4","Account 4","5","Account 5","6","Account 6");
		load_device_default($con,$device_counter,"Settings/Broadsoft IM&P","Auto Login","","P2968",1,"0","Disabled","1","Enabled");
		load_device_default($con,$device_counter,"Settings/Broadsoft IM&P","Display Non-XMPP Contacts","","P2969",1,"1","Yes","0","No");
		
		load_device_default($con,$device_counter,"Settings/Programmable Keys","Line 1 Mode","","P1363",1,"0","Line","1","Shared Line","10","Speed Dial","11","Busy Lamp Field (BLF)","12","Presence Watcher","13","Eventlist BLF","14","Speed Dial via Active Account","15","Dial DTMF","16","Voicemail","17","Call Return","18","Transfer","19","Call Park","20","Intercom","21","LDAP Search","23","Multicast Paging","24","Record","25","Call Log","26","Monitored Call Park");
		load_device_default($con,$device_counter,"Settings/Programmable Keys","Line 1 Account","","P1364",1,"0","Account 1","1","Account 2","2","Account 3","3","Account 4","4","Account 5","5","Account 6");
		load_device_default($con,$device_counter,"Settings/Programmable Keys","Line 1 Description","Max: 32 chars","P1465",2,"");
		load_device_default($con,$device_counter,"Settings/Programmable Keys","Line 1 Value","Max: 64 chars","P1466",2,"");
		load_device_default($con,$device_counter,"Settings/Programmable Keys","Line 2 Mode","","P1365",1,"0","Line","1","Shared Line","10","Speed Dial","11","Busy Lamp Field (BLF)","12","Presence Watcher","13","Eventlist BLF","14","Speed Dial via Active Account","15","Dial DTMF","16","Voicemail","17","Call Return","18","Transfer","19","Call Park","20","Intercom","21","LDAP Search","23","Multicast Paging","24","Record","25","Call Log","26","Monitored Call Park");
		load_device_default($con,$device_counter,"Settings/Programmable Keys","Line 2 Account","","P1366",1,"0","Account 1","1","Account 2","2","Account 3","3","Account 4","4","Account 5","5","Account 6");
		load_device_default($con,$device_counter,"Settings/Programmable Keys","Line 2 Description","Max: 32 chars","P1467",2,"");
		load_device_default($con,$device_counter,"Settings/Programmable Keys","Line 2 Value","Max: 64 chars","P1468",2,"");
		load_device_default($con,$device_counter,"Settings/Programmable Keys","Line 3 Mode","","P1367",1,"0","Line","1","Shared Line","10","Speed Dial","11","Busy Lamp Field (BLF)","12","Presence Watcher","13","Eventlist BLF","14","Speed Dial via Active Account","15","Dial DTMF","16","Voicemail","17","Call Return","18","Transfer","19","Call Park","20","Intercom","21","LDAP Search","23","Multicast Paging","24","Record","25","Call Log","26","Monitored Call Park");
		load_device_default($con,$device_counter,"Settings/Programmable Keys","Line 3 Account","","P1368",1,"0","Account 1","1","Account 2","2","Account 3","3","Account 4","4","Account 5","5","Account 6");
		load_device_default($con,$device_counter,"Settings/Programmable Keys","Line 3 Description","Max: 32 chars","P1469",2,"");
		load_device_default($con,$device_counter,"Settings/Programmable Keys","Line 3 Value","Max: 64 chars","P1470",2,"");
		if ($device_counter>1)
		{
			load_device_default($con,$device_counter,"Settings/Programmable Keys","Line 4 Mode","","P1369",1,"0","Line","1","Shared Line","10","Speed Dial","11","Busy Lamp Field (BLF)","12","Presence Watcher","13","Eventlist BLF","14","Speed Dial via Active Account","15","Dial DTMF","16","Voicemail","17","Call Return","18","Transfer","19","Call Park","20","Intercom","21","LDAP Search","23","Multicast Paging","24","Record","25","Call Log","26","Monitored Call Park");
			load_device_default($con,$device_counter,"Settings/Programmable Keys","Line 4 Account","","P1370",1,"0","Account 1","1","Account 2","2","Account 3","3","Account 4","4","Account 5","5","Account 6");
			load_device_default($con,$device_counter,"Settings/Programmable Keys","Line 4 Description","Max: 32 chars","P1471",2,"");
			load_device_default($con,$device_counter,"Settings/Programmable Keys","Line 4 Value","Max: 64 chars","P1472",2,"");
			if ($device_counter==3)
			{
				load_device_default($con,$device_counter,"Settings/Programmable Keys","Line 5 Mode","","P1371",1,"0","Line","1","Shared Line","10","Speed Dial","11","Busy Lamp Field (BLF)","12","Presence Watcher","13","Eventlist BLF","14","Speed Dial via Active Account","15","Dial DTMF","16","Voicemail","17","Call Return","18","Transfer","19","Call Park","20","Intercom","21","LDAP Search","23","Multicast Paging","24","Record","25","Call Log","26","Monitored Call Park");
				load_device_default($con,$device_counter,"Settings/Programmable Keys","Line 5 Account","","P1372",1,"0","Account 1","1","Account 2","2","Account 3","3","Account 4","4","Account 5","5","Account 6");
				load_device_default($con,$device_counter,"Settings/Programmable Keys","Line 5 Description","Max: 32 chars","P1473",2,"");
				load_device_default($con,$device_counter,"Settings/Programmable Keys","Line 5 Value","Max: 64 chars","P1474",2,"");
				load_device_default($con,$device_counter,"Settings/Programmable Keys","Line 6 Mode","","P1373",1,"0","Line","1","Shared Line","10","Speed Dial","11","Busy Lamp Field (BLF)","12","Presence Watcher","13","Eventlist BLF","14","Speed Dial via Active Account","15","Dial DTMF","16","Voicemail","17","Call Return","18","Transfer","19","Call Park","20","Intercom","21","LDAP Search","23","Multicast Paging","24","Record","25","Call Log","26","Monitored Call Park");
				load_device_default($con,$device_counter,"Settings/Programmable Keys","Line 6 Account","","P1374",1,"0","Account 1","1","Account 2","2","Account 3","3","Account 4","4","Account 5","5","Account 6");
				load_device_default($con,$device_counter,"Settings/Programmable Keys","Line 6 Description","Max: 32 chars","P1475",2,"");
				load_device_default($con,$device_counter,"Settings/Programmable Keys","Line 6 Value","Max: 64 chars","P1476",2,"");
			}
		}
		load_device_default($con,$device_counter,"Settings/Programmable Keys","Softkey 1 Mode","","P2987",1,"0","Default","10","Speed Dial","14","Speed Dial via Active Account","16","Voicemail","17","Call Return","18","20","Intercom","21","LDAP Search","25","Call Log");
		load_device_default($con,$device_counter,"Settings/Programmable Keys","Softkey 1 Account","","P2988",1,"0","Account 1","1","Account 2","2","Account 3","3","Account 4","4","Account 5","5","Account 6");
		load_device_default($con,$device_counter,"Settings/Programmable Keys","Softkey 1 Description","Max: 32 chars","P2989",2,"");
		load_device_default($con,$device_counter,"Settings/Programmable Keys","Softkey 1 Value","Max: 64 chars","P2990",2,"");
		load_device_default($con,$device_counter,"Settings/Programmable Keys","Softkey 2 Mode","","P2991",1,"0","Default","10","Speed Dial","14","Speed Dial via Active Account","16","Voicemail","17","Call Return","18","20","Intercom","21","LDAP Search","25","Call Log");
		load_device_default($con,$device_counter,"Settings/Programmable Keys","Softkey 2 Account","","P2992",1,"0","Account 1","1","Account 2","2","Account 3","3","Account 4","4","Account 5","5","Account 6");
		load_device_default($con,$device_counter,"Settings/Programmable Keys","Softkey 2 Description","Max: 32 chars","P2993",2,"");
		load_device_default($con,$device_counter,"Settings/Programmable Keys","Softkey 2 Value","Max: 64 chars","P2994",2,"");
		if ($device_counter>1)
		{
			load_device_default($con,$device_counter,"Settings/Programmable Keys","Softkey 3 Mode","","P2995",1,"0","Default","10","Speed Dial","14","Speed Dial via Active Account","16","Voicemail","17","Call Return","18","20","Intercom","21","LDAP Search","25","Call Log");
			load_device_default($con,$device_counter,"Settings/Programmable Keys","Softkey 3 Account","","P2996",1,"0","Account 1","1","Account 2","2","Account 3","3","Account 4","4","Account 5","5","Account 6");
			load_device_default($con,$device_counter,"Settings/Programmable Keys","Softkey 3 Description","Max: 32 chars","P2997",2,"");
			load_device_default($con,$device_counter,"Settings/Programmable Keys","Softkey 3 Value","Max: 64 chars","P2998",2,"");
		}
		if ($device_counter!=2)
		{
			//MPK, no gxp2140
			$mpk_subcounter=301;
			for($mpk_counter=1;$mpk_counter<=7;$mpk_counter+=1)
			{
				load_device_default($con,$device_counter,"Settings/Multi Purpose Keys","MPK ".$mpk_counter." Mode","","P".(322+$mpk_counter),1,"0","Speed Dial","1","Busy Lamp Field (BLF)","2","Presence Watcher","3","Eventlist BLF","4","Speed Dial via Active Account","5","Dial DTMF","6","Voicemail","7","Call Return","8","Transfer","9","Call Park","10","Intercom","11","LDAP Search","13","Multicast Paging","14","Record","15","Call Log","16","Monitored Call Park");
				load_device_default($con,$device_counter,"Settings/Multi Purpose Keys","MPK ".$mpk_counter." Account","","P".($mpk_subcounter),1,"0","Account 1","1","Account 2","2","Account 3","3","Account 4","4","Account 5","5","Account 6");
				$mpk_subcounter+=1;
				load_device_default($con,$device_counter,"Settings/Multi Purpose Keys","MPK ".$mpk_counter." Name","Max: 128 chars","P".($mpk_subcounter),2,"");
				$mpk_subcounter+=1;
				load_device_default($con,$device_counter,"Settings/Multi Purpose Keys","MPK ".$mpk_counter." User ID","Max: 64 chars","P".($mpk_subcounter),2,"");
				$mpk_subcounter+=1;
			}
			$mpk_subcounter=353;
			for($mpk_counter=8;$mpk_counter<=18;$mpk_counter+=1)
			{
				if ($mpk_counter<=8 || $device_counter==3)
				{
					load_device_default($con,$device_counter,"Settings/Multi Purpose Keys","MPK ".$mpk_counter." Mode","","P".($mpk_subcounter),1,"0","Speed Dial","1","Busy Lamp Field (BLF)","2","Presence Watcher","3","Eventlist BLF","4","Speed Dial via Active Account","5","Dial DTMF","6","Voicemail","7","Call Return","8","Transfer","9","Call Park","10","Intercom","11","LDAP Search","13","Multicast Paging","14","Record","15","Call Log","16","Monitored Call Park");
					$mpk_subcounter+=1;
					load_device_default($con,$device_counter,"Settings/Multi Purpose Keys","MPK ".$mpk_counter." Account","","P".($mpk_subcounter),1,"0","Account 1","1","Account 2","2","Account 3","3","Account 4","4","Account 5","5","Account 6");
					$mpk_subcounter+=1;
					load_device_default($con,$device_counter,"Settings/Multi Purpose Keys","MPK ".$mpk_counter." Name","Max: 128 chars","P".($mpk_subcounter),2,"");
					$mpk_subcounter+=1;
					load_device_default($con,$device_counter,"Settings/Multi Purpose Keys","MPK ".$mpk_counter." User ID","Max: 64 chars","P".($mpk_subcounter),2,"");
					$mpk_subcounter+=1;
				}
			}
			$mpk_subcounter=1440;
			for($mpk_counter=19;$mpk_counter<=24;$mpk_counter+=1)
			{
				if ($device_counter==3)
				{
					load_device_default($con,$device_counter,"Settings/Multi Purpose Keys","MPK ".$mpk_counter." Mode","","P".($mpk_subcounter),1,"0","Speed Dial","1","Busy Lamp Field (BLF)","2","Presence Watcher","3","Eventlist BLF","4","Speed Dial via Active Account","5","Dial DTMF","6","Voicemail","7","Call Return","8","Transfer","9","Call Park","10","Intercom","11","LDAP Search","13","Multicast Paging","14","Record","15","Call Log","16","Monitored Call Park");
					$mpk_subcounter+=1;
					load_device_default($con,$device_counter,"Settings/Multi Purpose Keys","MPK ".$mpk_counter." Account","","P".($mpk_subcounter),1,"0","Account 1","1","Account 2","2","Account 3","3","Account 4","4","Account 5","5","Account 6");
					$mpk_subcounter+=1;
					load_device_default($con,$device_counter,"Settings/Multi Purpose Keys","MPK ".$mpk_counter." Name","Max: 128 chars","P".($mpk_subcounter),2,"");
					$mpk_subcounter+=1;
					load_device_default($con,$device_counter,"Settings/Multi Purpose Keys","MPK ".$mpk_counter." User ID","Max: 64 chars","P".($mpk_subcounter),2,"");
					$mpk_subcounter+=1;
				}
			}
		}
	}
	//NOT INSIDE LOOP - GXP2140 ONLY
	$ext_subcounter=23000;
	for($ext_counter=1;$ext_counter<=160;$ext_counter+=1)
	{
		load_device_default($con,2,"Settings/Extension Boards","EXT ".$ext_counter." Mode","","P".($ext_subcounter),1,"0","Speed Dial","1","Busy Lamp Field (BLF)","2","Presence Watcher","3","Eventlist BLF","4","Speed Dial via Active Account","5","Dial DTMF","6","Voicemail","7","Call Return","8","Transfer","9","Call Park","10","Intercom","11","LDAP Search","13","Multicast Paging","14","Record","15","Call Log","16","Monitored Call Park");
		$ext_subcounter+=1;
		load_device_default($con,2,"Settings/Extension Boards","EXT ".$ext_counter." Account","","P".($ext_subcounter),1,"0","Account 1","1","Account 2","2","Account 3","3","Account 4");
		$ext_subcounter+=1;
		load_device_default($con,2,"Settings/Extension Boards","EXT ".$ext_counter." Description","","P".($ext_subcounter),2,"");
		$ext_subcounter+=1;
		load_device_default($con,2,"Settings/Extension Boards","EXT ".$ext_counter." Value","","P".($ext_subcounter),2,"");
		$ext_subcounter+=1;
		$ext_subcounter+=1;//Offset!
	}	
?>