<?php
	for ($device_counter=10;$device_counter<=18;$device_counter+=1)
	{
		load_device_default($con,$device_counter,"Network/Basic","Internet Port Mode","Configures IP address mode for the Internet Port","network.ip_address_mode",1,"0","IPv4","1","IPv6","2","IPv4 & IPv6");
		load_device_default($con,$device_counter,"Network/Basic","IPv4 Config","Configures Internet port for IPv4 or IPv4&IPv6","network.internet_port.type",1,"0","DHCP","1","PPPoE","2","Static IP");
		load_device_default($con,$device_counter,"Network/Basic","IPv4 Address","IP address, when configured for IPv4 static.","network.internet_port.ip",2,"");
		load_device_default($con,$device_counter,"Network/Basic","IPv4 Subnet Mask","Subnet mask, when configured for IPv4 static.","network.internet_port.mask",2,"");
		load_device_default($con,$device_counter,"Network/Basic","IPv4 Gateway","Gateway IP address, when configured for IPv4 static.","network.internet_port.gateway",2,"");
		load_device_default($con,$device_counter,"Network/Basic","IPv4 Primary DNS","DNS IP address, when configured for IPv4 static.","network.primary_dns",2,"");
		load_device_default($con,$device_counter,"Network/Basic","IPv4 Secondary DNS","DNS IP address, when configured for IPv4 static.","network.secondary_dns",2,"");
		load_device_default($con,$device_counter,"Network/Basic","PPPoE Username","Username for PPPoE.","network.pppoe.user",2,"");
		load_device_default($con,$device_counter,"Network/Basic","PPPoE Password","Password for PPPoE.","network.pppoe.password",2,"");
		load_device_default($con,$device_counter,"Network/Basic","IPv6 Config","Configures Internet port for IPv4 or IPv4&IPv6","network.ipv6_internet_port.type",1,"0","DHCP","1","PPPoE","2","Static IP");
		load_device_default($con,$device_counter,"Network/Basic","IPv6 Prefix","Value between 0 and 128. Default: 64","network.ipv6_prefix",2,"64");
		load_device_default($con,$device_counter,"Network/Basic","IPv6 Address","IPv6 Address","network.ipv6_internet_port.ip",2,"");
		load_device_default($con,$device_counter,"Network/Basic","IPv6 Gateway","Gateway IP address, when configured for IPv6 static.","network.ipv6_internet_port.gateway",2,"");
		load_device_default($con,$device_counter,"Network/Basic","IPv6 Primary DNS","DNS IP address, when configured for IPv6 static.","network.ipv6_primary_dns",2,"");
		load_device_default($con,$device_counter,"Network/Basic","IPv6 Secondary DNS","DNS IP address, when configured for IPv6 static.","network.ipv6_secondary_dns",2,"");
		
		load_device_default($con,$device_counter,"Network/PC Port","PC Port Active","Enables/Disables PC Port","network.pc_port.enable",1,"1","Auto Negotiation","0","Disabled");
		if ($device_counter==10 || $device_counter==11 || $device_counter==12 || $device_counter==14)
		{
			load_device_default($con,$device_counter,"Network/PC Port","PC Port Config","Set PC LAN port type. Bridge: PC is assigned an IP directly from main router. Router: This phone acts as a router, PC is inaccessible remotely.","network.bridge_mode",1,"1","Bridge","0","Router");
			load_device_default($con,$device_counter,"Network/PC Port","PC Router IP Address","Only valid in Router Mode: sets the IP address of the router that the computer sees when connected to the PC port.","network.pc_port.ip",2,"10.0.0.1");
			load_device_default($con,$device_counter,"Network/PC Port","PC Router Subnet Mask","Only valid in Router Mode: sets the Subnet Mask of the router that the computer sees when connected to the PC port.","network.pc_port.mask",2,"255.255.255.0");
			load_device_default($con,$device_counter,"Network/PC Port","PC Router DHCP Status","Only valid in Router Mode: enables/disables the DHCP server to the connected PC","network.pc_port.dhcp_server",1,"1","Enabled","0","Disabled");
			load_device_default($con,$device_counter,"Network/PC Port","PC Router DHCP Range Start","Only valid in Router Mode: The first address to be given out through DHCP","network.dhcp.start_ip",2,"10.0.0.10");
			load_device_default($con,$device_counter,"Network/PC Port","PC Router DHCP Range End","Only valid in Router Mode: The last address to be given out through DHCP","network.dhcp.end_ip",2,"10.0.0.100");
		}
		
		load_device_default($con,$device_counter,"Network/Advanced","ICMPv6 Status","Enables/Disables ICMPv6-obtained IPv6 settings","network.ipv6_icmp_v6.enable",1,"1","Enabled","0","Disabled");
		if ($device_counter==16 || $device_counter==17)
		{
			load_device_default($con,$device_counter,"Network/Advanced","WAN Port Link","Sets the link speed/type. Keep this at Auto unless your switch requires it to be set.","network.internet_port.speed_duplex",1,"0","Auto Negotiate","1","Full Duplex: 10 Mbps","2","Full Duplex: 100 Mbps","3","Half Duplex: 10 Mbps","4","Half Duplex: 100 Mbps","5","Full Duplex: 1,000 Mbps");
			load_device_default($con,$device_counter,"Network/Advanced","PC Port Link","Sets the link speed/type. Keep this at Auto unless your switch requires it to be set.","network.pc_port.speed_duplex",1,"0","Auto Negotiate","1","Full Duplex: 10 Mbps","2","Full Duplex: 100 Mbps","3","Half Duplex: 10 Mbps","4","Half Duplex: 100 Mbps","5","Full Duplex: 1,000 Mbps");
		}
		else
		{
			load_device_default($con,$device_counter,"Network/Advanced","WAN Port Link","Sets the link speed/type. Keep this at Auto unless your switch requires it to be set.","network.internet_port.speed_duplex",1,"0","Auto Negotiate","1","Full Duplex: 10 Mbps","2","Full Duplex: 100 Mbps","3","Half Duplex: 10 Mbps","4","Half Duplex: 100 Mbps");
			load_device_default($con,$device_counter,"Network/Advanced","PC Port Link","Sets the link speed/type. Keep this at Auto unless your switch requires it to be set.","network.pc_port.speed_duplex",1,"0","Auto Negotiate","1","Full Duplex: 10 Mbps","2","Full Duplex: 100 Mbps","3","Half Duplex: 10 Mbps","4","Half Duplex: 100 Mbps");
		}
		load_device_default($con,$device_counter,"Network/Advanced","WAN VLAN Status","Enables/Disables VLAN on the WAN port","network.vlan.internet_port_enable",1,"0","Disabled","1","Enabled");
		load_device_default($con,$device_counter,"Network/Advanced","WAN VLAN ID","If WAN VLAN is enabled, set this to the VLAN ID. Range: 1 - 4094","network.vlan.internet_port_vid",2,"1");
		load_device_default($con,$device_counter,"Network/Advanced","WAN VLAN Priority","If WAN VLAN is enabled, set this to the VLAN priority. Range: 0 - 7","network.vlan.internet_port_priority",2,"0");
		load_device_default($con,$device_counter,"Network/Advanced","PC VLAN Status","Enables/Disables VLAN on the PC port","network.vlan.pc_port_enable",1,"0","Disabled","1","Enabled");
		load_device_default($con,$device_counter,"Network/Advanced","PC VLAN ID","If PC VLAN is enabled, set this to the VLAN ID. Range: 1 - 4094","network.vlan.pc_port_vid",2,"1");
		load_device_default($con,$device_counter,"Network/Advanced","PC VLAN Priority","If PC VLAN is enabled, set this to the VLAN priority. Range: 0 - 7","network.vlan.pc_port_priority",2,"0");
		if ($device_counter==16 || $device_counter==17 || $device_counter==18)
		{
			load_device_default($con,$device_counter,"Network/Advanced","PC VLAN Mode","Configures the way the phone processes packets sent from the PC port when VLAN is enabled.","network.vlan.pc_port_mode",1,"0","Forward packets directly, regardless of tag","1","If tagged, forward directly. If untagged, tag then forward");
		}
		load_device_default($con,$device_counter,"Network/Advanced","VLAN Obtain by DHCP","Enables/Disables the phone to obtain VLAN by DHCP","network.vlan.dhcp_enable",1,"1","Enabled","0","Disabled");
		load_device_default($con,$device_counter,"Network/Advanced","VLAN DHCP Option","If VLAN Obtain by DHCP is enabled, this configures the DHCP option from which the phone will obtain VLAN settings. Range: 128 - 254. Up to five options supported, separated by commas.","network.vlan.dhcp_option",2,"132");
		load_device_default($con,$device_counter,"Network/Advanced","DHCP Hostname","Configures the client's hostname for DHCP Option 12","network.dhcp_host_name",2,"IP Phone");
		load_device_default($con,$device_counter,"Network/Advanced","WebUI HTTP Status","Enables/Disables the HTTP protocol for web access","wui.http_enable",1,"1","Enabled","0","Disabled");
		load_device_default($con,$device_counter,"Network/Advanced","WebUI HTTPS Status","Enables/Disables the HTTPS protocol for web access","wui.https_enable",1,"1","Enabled","0","Disabled");
		load_device_default($con,$device_counter,"Network/Advanced","WebUI HTTP Port","Port for the HTTP protocol. Range: 1 - 65535","wui.port.http",2,"80");
		load_device_default($con,$device_counter,"Network/Advanced","WebUI HTTPS Port","Port for the HTTPS protocol. Range: 1 - 65535","wui.port.https",2,"443");
		load_device_default($con,$device_counter,"Network/Advanced","RTP Port Start","Minimum Port for the RTP protocol. Range: 1024 - 65535","network.port.min_rtpport",2,"11780");
		load_device_default($con,$device_counter,"Network/Advanced","RTP Port End","Maximum Port for the RTP protocol. Range: 1024 - 65535","network.port.max_rtpport",2,"11800");
		load_device_default($con,$device_counter,"Network/Advanced","Voice QoS","Configures Voice QoS. Range: 0 - 63, default 46","network.qos.rtptos",2,"46");
		load_device_default($con,$device_counter,"Network/Advanced","SIP QoS","Configures SIP QoS. Range: 0 - 63, default 26","network.qos.signaltos",2,"26");
		load_device_default($con,$device_counter,"Network/Advanced","802.1x Mode","Configures 802.1x mode, default Disabled","network.802_1x.mode",1,"0","Disabled","1","EAP-MD5","2","EAP-TLS","3","PEAP-MSCHAPv2","4","EAP-TTLS/EAP-MSCHAPv2");
		load_device_default($con,$device_counter,"Network/Advanced","802.1x Identity","Configures 802.1x authentication username. Range: Up to 32 chars","network.802_1x.identity",2,"");
		load_device_default($con,$device_counter,"Network/Advanced","802.1x MD5 Password","Configures 802.1x MD5 authentication password. Range: Up to 32 chars","network.802_1x.md5_password",2,"");
		load_device_default($con,$device_counter,"Network/Advanced","802.1x CA Cert URL","Sets the access URL of the CA Certificate when 802.1x mode is EAP-TLS, PEAP-MSCHAPv2, or EAP-TTLS/EAP-MSCHAPv2","network.802_1x.root_cert_url",2,"");
		load_device_default($con,$device_counter,"Network/Advanced","802.1x Cert URL","Sets the access URL of the Device Certificate when 802.1x mode is EAP-TLS","network.802_1x.client_cert_url",2,"");
		if ($device_counter != 15)
		{
			load_device_default($con,$device_counter,"Network/Advanced","OpenVPN Status","Enables/Disables OpenVPN features","network.vpn_enable",1,"0","Disabled","1","Enabled");
			load_device_default($con,$device_counter,"Network/Advanced","OpenVPN Config URL","Access URL of the .tar file for OpenVPN","openvpn.url",2,"");
		}
		load_device_default($con,$device_counter,"Network/Advanced","LLDP Status","Enables/Disables LLDP features","network.lldp.enable",1,"1","Enabled","0","Disabled");
		load_device_default($con,$device_counter,"Network/Advanced","LLDP Packet Interval","Sets the interval (in seconds) to broadcast LLDP requests. Range: 1 - 3600","network.lldp.packet_interval",2,"60");
		load_device_default($con,$device_counter,"Network/Advanced","Span PC Port","If enabled, data packets received on the WAN port are also accessible to the PC port.","network.span_to_pc_port",1,"0","Disabled","1","Enabled");
	}
?>