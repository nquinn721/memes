<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" type="text/css"/>
	<style>
	img{
		width:200px;
		height:200px;
	}
	.splash {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background: rgba(0,0,0,0.8);
		display: flex;
	}
	.none{
		display: none;
	}
	.splash img {
		margin: auto;
		width:600px;
		height: auto;
		max-height: 900px;
	}
	</style>
</head>
<body>
<div class="splash none">
	<img src="" alt="">
</div>
<!-- <object type="application/x-shockwave-flash" data="http://static1.dmcdn.net/flash/dmplayerv4/dmplayer-prod-compressed.swf.v4820fdeaffebd53b3" width="100%" height="100%" id="video_player_main" name="video_player_main" data-nolib="">
	<param name="bgcolor" value="0x000000"> 
	<param name="allowfullscreen" value="true">
	<param name="allowscriptaccess" value="always">
	<param name="wmode" value="direct">
	<param name="flashvars" value="allowHTTPSRewriting=0&amp;id=video_player_main&amp;background=171D1B&amp;foreground=F7FFFD&amp;highlight=FFCC33&amp;enableApi=1&amp;playerapiid=video_player_main&amp;apiSequenceURL=http%3A%2F%2Fwww.dailymotion.com%2Fsequence%2F%25TYPE%2F%25VIDEO_ID%3F%25QUERY_PARAMS&amp;chromeless=0&amp;parentURL=&amp;isEmbedded=0&amp;drmToken=&amp;logo=0&amp;APICustomParams=%7B%22autoplay%22%3Atrue%7D&amp;skin=&amp;diagnosticURL=http%3A%2F%2Fwww.dailymotion.com%2Fdiagnostic_player&amp;sequence=%7B%22config%22%3A%7B%22media_id%22%3A%22x2kt3bj%22%2C%22show_audience%22%3Atrue%2C%22allow_auto_switch%22%3Atrue%2C%22content_type%22%3A%22vod%22%2C%22buffertime%22%3A3%2C%22max_buffertime%22%3A30%2C%22preview_url%22%3A%22http%3A%5C%2F%5C%2Fs2.dmcdn.net%5C%2FJnwxz%5C%2Fx240-RVH.jpg%22%2C%22ads_unit_url%22%3A%22http%3A%5C%2F%5C%2Fvox-static.liverail.com%5C%2Fswf%5C%2Fv4%5C%2Fadmanager.swf%22%2C%22ads_capping_url%22%3A%22http%3A%5C%2F%5C%2Fwww.dailymotion.com%5C%2Fcookie%5C%2Fac_token%3Fvalue%3D1427576601%22%2C%22ads_creative_data%22%3A%7B%22LR_PUBLISHER_ID%22%3A21292%2C%22LR_TITLE%22%3A%22Forza+Horizon+2+Presents+Fast+%26+Furious+-+Launch+Trailer%22%2C%22LR_VIDEO_ID%22%3A155881999%2C%22LR_VIDEO_URL%22%3A%22http%3A%5C%2F%5C%2Fwww.dailymotion.com%5C%2Fvideo%5C%2Fx2kt3bj%22%2C%22LR_DM_TAGS%22%3A%22gaming%2Claunch%2CFast%2BFurious%2Cxbox%2B360%2Cjuego%2Cgame%2Cgamespot%2Cstandalone%2Bexpansion%2Cxbox%2Bone%2Cgames%22%2C%22LR_VERTICALS%22%3A%22videogames%22%2C%22LR_VIDEO_AMID%22%3A80048714%2C%22LR_VIDEO_DURATION%22%3A59%2C%22LR_TAGS%22%3A%22VTYPE_official%2CSMODE_vod%2CLANG_en%2CPAGE_playerPage%2CPTYPE_flash%2CVDUR_short%2CPARENTID_80047786%2Cv1st_516C12325922EDBB%2Cpid_5517171959398%22%2C%22LR_DM_VTYPE%22%3A%22official%22%2C%22LR_DM_SMODE%22%3A%22vod%22%2C%22LR_DM_LANG%22%3A%22en%22%2C%22LR_DM_VDUR%22%3A%22short%22%2C%22LR_DM_PAGE%22%3A%22playerPage%22%2C%22LR_DM_PTYPE%22%3A%22flash%22%2C%22LR_ALLOWDUPLICATES%22%3A1%2C%22LR_DESCRIPTION%22%3A%22gaming.dailymotion.com%22%2C%22LR_CUSTOM1%22%3A%22w2ATl0VCwrq3Pu3UhX3iKNlmTIMnD1QA%22%2C%22LR_URL%22%3A%22http%3A%5C%2F%5C%2Fwww.dailymotion.com%5C%2Fvideo%5C%2Fx2kt3bj_forza-horizon-2-presents-fast-furious-launch-trailer_videogames%22%2C%22LR_COMPANIONS%22%3A%22300%3A250%3Amc_Middle%3Amc_Middle%3Atrue%22%2C%22LR_LAYOUT_SKIN_ID%22%3A0%2C%22LR_DM_ADTV_CATEGORIES%22%3A%22Hobbies+%26+Interests%22%2C%22LR_DM_SMARTCLIP_CATEGORIES%22%3A%22Games%22%2C%22LR_DM_IAB%22%3A%22IAB9%22%2C%22LR_DMX%22%3A%22gaming.dailymotion.com%22%2C%22LR_AUTOPLAY%22%3A0%7D%2C%22ads_timeouts%22%3A%7B%22load%22%3A3000%2C%22global%22%3A10000%7D%2C%22labels%22%3A%7B%22fullscreenDisabled%22%3A%22Fullscreen+has+been+disabled%22%2C%22embed%22%3A%22Embed%22%2C%22link%22%3A%22Link%22%2C%22startAt%22%3A%22Start+at%22%2C%22hotspotCopied%22%3A%22Hotspot+link+copied%21+Press+%5C%22ctrl+%2B+V%5C%22+to+paste.%22%2C%22embedCodeCopied%22%3A%22Embed+code+copied%21+Press+%5C%22ctrl+%2B+V%5C%22+to+paste.%22%2C%22permalinkCopied%22%3A%22Permalink+copied%21+Press+%5C%22ctrl+%2B+V%5C%22+to+paste.%22%2C%22defaultError%22%3A%22Oops%2C%3Cbr+%5C%2F%3EWe+are+experiencing+some+difficulties+with+this+video%2C+please+try+again+later.%22%2C%22prerollMessageSingular%22%3A%22Advertising+-+Your+video+in+%25d+second%22%2C%22prerollMessagePlural%22%3A%22Advertising+-+Your+video+in+%25d+seconds%22%2C%22postrollMessageSingular%22%3A%22Advertising+-+%25d+second+left%22%2C%22postrollMessagePlural%22%3A%22Advertising+-+%25d+seconds+left%22%2C%22liveMidrollMessage%22%3A%22Stay+tuned%2C+this+live+stream+will+resume+shortly%22%7D%2C%22metadata%22%3A%7B%22title%22%3A%22Forza+Horizon+2+Presents+Fast+%26+Furious+-+Launch+Trailer%22%7D%2C%22skinLegacy%22%3A1%2C%22skinCustomColors%22%3A1%2C%22skinForeground%22%3A%22%22%2C%22skinBackground%22%3A%22%22%2C%22skinHighlight%22%3A%22%22%2C%22skin%22%3A%22%22%2C%22sharing%22%3A%5B%5D%7D%2C%22sequence%22%3A%5B%7B%22name%22%3A%22root%22%2C%22layerList%22%3A%5B%7B%22name%22%3A%22background%22%2C%22type%22%3A%22Background%22%2C%22param%22%3A%7B%22color%22%3A%22000000%22%2C%22withLoading%22%3Atrue%7D%2C%22sequenceList%22%3A%5B%7B%22name%22%3A%22contextMenu%22%2C%22layerList%22%3A%5B%7B%22name%22%3A%22contextMenu%22%2C%22type%22%3A%22ContextMenu%22%2C%22param%22%3A%7B%22items%22%3A%5B%7B%22label%22%3A%5B%22Share+on+Facebook%22%5D%2C%22type%22%3A%22notification%22%2C%22param%22%3A%7B%22section%22%3A%22share%22%2C%22clickable%22%3Atrue%2C%22enabled%22%3Atrue%2C%22disableAfter%22%3Afalse%2C%22duringLayer%22%3A%22actions%22%2C%22menuItemId%22%3A%22share_facebook%22%2C%22layer%22%3A%22actions%22%2C%22message%22%3A%22shareFacebook%22%7D%7D%2C%7B%22label%22%3A%5B%22Share+on+Twitter%22%5D%2C%22type%22%3A%22notification%22%2C%22param%22%3A%7B%22section%22%3A%22share%22%2C%22clickable%22%3Atrue%2C%22enabled%22%3Atrue%2C%22disableAfter%22%3Afalse%2C%22duringLayer%22%3A%22actions%22%2C%22menuItemId%22%3A%22share_twitter%22%2C%22layer%22%3A%22actions%22%2C%22message%22%3A%22shareTwitter%22%7D%7D%2C%7B%22label%22%3A%5B%22Copy+URL+link%22%5D%2C%22type%22%3A%22copy%22%2C%22param%22%3A%7B%22section%22%3A%22copy%22%2C%22clickable%22%3Atrue%2C%22enabled%22%3Atrue%2C%22disableAfter%22%3Afalse%2C%22duringLayer%22%3A%22%22%2C%22menuItemId%22%3A%22copy_link%22%2C%22data%22%3A%22http%3A%5C%2F%5C%2Fwww.dailymotion.com%5C%2Fvideo%5C%2Fx2kt3bj_forza-horizon-2-presents-fast-furious-launch-trailer_videogames%22%7D%7D%2C%7B%22label%22%3A%5B%22Copy+embed+code%22%5D%2C%22type%22%3A%22notification%22%2C%22param%22%3A%7B%22section%22%3A%22copy%22%2C%22clickable%22%3Atrue%2C%22enabled%22%3Atrue%2C%22disableAfter%22%3Afalse%2C%22duringLayer%22%3A%22export%22%2C%22menuItemId%22%3A%22copy_embed%22%2C%22layer%22%3A%22export%22%2C%22message%22%3A%22copyEmbedCode%22%7D%7D%2C%7B%22label%22%3A%5B%22Expand+video+on+screen%22%2C%22Fit+video+on+screen%22%5D%2C%22type%22%3A%22notification%22%2C%22param%22%3A%7B%22section%22%3A%22expand_fit%22%2C%22clickable%22%3Atrue%2C%22enabled%22%3Atrue%2C%22disableAfter%22%3Afalse%2C%22duringLayer%22%3A%22video%22%2C%22menuItemId%22%3A%22fit_expand%22%2C%22layer%22%3A%22video%22%2C%22message%22%3A%22expandOrFit%22%7D%7D%2C%7B%22label%22%3A%5B%22Display+video+information%22%2C%22Hide+video+information%22%5D%2C%22type%22%3A%22notification%22%2C%22param%22%3A%7B%22section%22%3A%22display_infos%22%2C%22clickable%22%3Atrue%2C%22enabled%22%3Atrue%2C%22disableAfter%22%3Afalse%2C%22duringLayer%22%3A%22infos%22%2C%22menuItemId%22%3A%22show_hide_infos%22%2C%22layer%22%3A%22infos%22%2C%22message%22%3A%22toggle%22%7D%7D%5D%7D%7D%5D%7D%2C%7B%22name%22%3A%22reporting%22%2C%22layerList%22%3A%5B%7B%22name%22%3A%22reporting%22%2C%22type%22%3A%22Reporting%22%2C%22param%22%3A%7B%22URLs%22%3A%7B%22mediaLogView%22%3A%7B%22comscore%22%3A%22http%3A%5C%2F%5C%2Fb.scorecardresearch.com%5C%2Fb%3Fc1%3D1%26c2%3D4000005%26c3%3D4000005%26c4%3D1200%26c5%3D02%26c6%3Dx2kt3bj%22%2C%22internal%22%3A%22http%3A%5C%2F%5C%2Fwww.dailymotion.com%5C%2Flogger%5C%2Fvideo%5C%2Faccess%5C%2Fx2kt3bj%3Fsession_id%3D%26referer%3D%26country%3DUS%26user_agent%3DMozilla%252F5.0%2B%2528Windows%2BNT%2B6.1%253B%2BWOW64%2529%2BAppleWebKit%252F537.36%2B%2528KHTML%252C%2Blike%2BGecko%2529%2BChrome%252F41.0.2272.101%2BSafari%252F537.36%26key%3D8kr0fdvcwi0l06oqjnly5fc%26v%3D551740f8%26i%3D4bb436bb%26h%3D2e828606124b1b9c31855c6f13239f70%22%2C%22loggerv3%22%3A%22http%3A%5C%2F%5C%2Flogger-06.vty.dailymotion.com%5C%2Fdm%5C%2Fdesktop-windows%5C%2Fvideo_item%5C%2Fa%5C%2Fplay%3Ft%3D516C12325922EDBB%26country%3DUS%26pid%3D5517171959398%26vl%3Den-us%26sv%3Den%26channel_id%3D14%26class%3Dofficial%26mode%3Dvod%26video_id%3D155881999%26r%3Dhttp%253A%252F%252Fwww.dailymotion.com%252Fvideo%252Fx2kt3bj_forza-horizon-2-presents-fast-furious-launch-trailer_videogames%26visitor_embedder%3Dhttp%253A%252F%252Fwww.dailymotion.com%252Fvideo%252Fx2kt3bj_forza-horizon-2-presents-fast-furious-launch-trailer_videogames%26src_ref%3D%26visitor_referer%3D%26client_embedder%3D%26owner_id%3D80048714%26parent_id%3D80047786%26s%3D8a18c1d66456467550cc3864bfb021090l06oqjnly5fc%22%2C%22krux%22%3A%22http%3A%5C%2F%5C%2Fbeacon.krxd.net%5C%2Fusermatch.gif%3Fpartner%3Ddailymotion%26partner_uid%3D516C12325922EDBB%22%2C%22progress%40%5C%2F50%25%22%3A%22http%3A%5C%2F%5C%2Flogger-06.vty.dailymotion.com%5C%2Fdm%5C%2Fdesktop-windows%5C%2Fvideo_item%5C%2Fa%5C%2Fprogress%3Ft%3D516C12325922EDBB%26country%3DUS%26pid%3D5517171959398%26vl%3Den-us%26sv%3Den%26channel_id%3D14%26class%3Dofficial%26mode%3Dvod%26video_id%3D155881999%26r%3D%26visitor_embedder%3D%26src_ref%3D%26visitor_referer%3D%26client_embedder%3D%26owner_id%3D80048714%26parent_id%3D80047786%26length%3D59%26pos%3D%25position%25%26time%3D%25time%25%22%2C%22history%22%3A%22http%3A%5C%2F%5C%2Fwww.dailymotion.com%5C%2Fhistory%5C%2Flog%5C%2Fuser%5C%2FGameSpot%5C%2Fvideo%5C%2Fx2kt3bj%3Faction%3Dstart%26%22%2C%22history%4080%25%7C10m%22%3A%22http%3A%5C%2F%5C%2Fwww.dailymotion.com%5C%2Fhistory%5C%2Flog%5C%2Fuser%5C%2FGameSpot%5C%2Fvideo%5C%2Fx2kt3bj%3Faction%3Dcomplete%26%22%2C%22behavior%4040%25%7C3m%22%3A%22http%3A%5C%2F%5C%2Ftofu.dmcdn.net%5C%2Fbehavior%5C%2F%25session%25%5C%2Fx2kt3bj%3F%22%2C%22gravity%4050%25%7C10m%22%3A%22http%3A%5C%2F%5C%2Fwww.dailymotion.com%5C%2Fgravity%5C%2Freport%3Fevent_type%3DWATCHED%26algo%3Dbehavior-only%26xid%3Dx2kt3bj%22%2C%22cbs_view%22%3A%22http%3A%5C%2F%5C%2Fom.cbsi.com%5C%2Fb%5C%2Fss%5C%2Fcbsicansite%2Ccbsicbsiall%5C%2F0%5C%2FFAS-3.4.8-AS3%5C%2Fs96906444476917%3FAQB%3D1%26ndh%3D1%26ce%3DUTF-8%26ns%3Dcbsinteractive%26g%3Dhttp%253A%252F%252Fwww.dailymotion.com%252Fvideo%252Fx2kt3bj_forza-horizon-2-presents-fast-furious-launch-trailer_videogames%26events%3Devent59%2Cevent52%26v2%3Dus%26v3%3Ddesktop%2520web%26v5%3Dcbsicansite%26c25%3DForza%2BHorizon%2B2%2BPresents%2BFast%2B%2526%2BFurious%2B-%2BLaunch%2BTrailer%26v25%3DForza%2BHorizon%2B2%2BPresents%2BFast%2B%2526%2BFurious%2B-%2BLaunch%2BTrailer%26c31%3D4DF742B3-B089-47C6-B049-F8A569A1D138%26v31%3D4DF742B3-B089-47C6-B049-F8A569A1D138%26c32%3Ddailymotion%257Ccan%26v32%3Ddailymotion%257Ccan%26v38%3Dvideo%26v39%3D0%253AM%253A0%26pe%3Dm_s%26pev3%3Ddailymotion_v4%26AQE%3D1%22%2C%22cbs%4025%25%22%3A%22http%3A%5C%2F%5C%2Fom.cbsi.com%5C%2Fb%5C%2Fss%5C%2Fcbsicansite%2Ccbsicbsiall%5C%2F0%5C%2FFAS-3.4.8-AS3%5C%2Fs55615095235407%3FAQB%3D1%26ndh%3D1%26ce%3DUTF-8%26ns%3Dcbsinteractive%26g%3Dhttp%253A%252F%252Fwww.dailymotion.com%252Fvideo%252Fx2kt3bj_forza-horizon-2-presents-fast-furious-launch-trailer_videogames%26events%3Devent59%2Cevent53%26v2%3Dus%26v3%3Ddesktop%2520web%26v5%3Dcbsicansite%26c25%3DForza%2BHorizon%2B2%2BPresents%2BFast%2B%2526%2BFurious%2B-%2BLaunch%2BTrailer%26v25%3DForza%2BHorizon%2B2%2BPresents%2BFast%2B%2526%2BFurious%2B-%2BLaunch%2BTrailer%26c31%3DE11AF25A-3F64-4F5D-85EF-F1220ED1C50A%26v31%3DE11AF25A-3F64-4F5D-85EF-F1220ED1C50A%26c32%3Ddailymotion%257Ccan%26v32%3Ddailymotion%257Ccan%26v38%3Dvideo%26v39%3D1%253AM%253A0-25%26pe%3Dm_i%26pev3%3Ddailymotion_v4%26AQE%3D1%22%2C%22cbs%4050%25%22%3A%22http%3A%5C%2F%5C%2Fom.cbsi.com%5C%2Fb%5C%2Fss%5C%2Fcbsicansite%2Ccbsicbsiall%5C%2F0%5C%2FFAS-3.4.8-AS3%5C%2Fs84394176169298%3FAQB%3D1%26ndh%3D1%26ce%3DUTF-8%26ns%3Dcbsinteractive%26g%3Dhttp%253A%252F%252Fwww.dailymotion.com%252Fvideo%252Fx2kt3bj_forza-horizon-2-presents-fast-furious-launch-trailer_videogames%26events%3Devent59%2Cevent54%26v2%3Dus%26v3%3Ddesktop%2520web%26v5%3Dcbsicansite%26c25%3DForza%2BHorizon%2B2%2BPresents%2BFast%2B%2526%2BFurious%2B-%2BLaunch%2BTrailer%26v25%3DForza%2BHorizon%2B2%2BPresents%2BFast%2B%2526%2BFurious%2B-%2BLaunch%2BTrailer%26c31%3DBB432ED1-FC76-4885-8FBC-2E6AB214D54E%26v31%3DBB432ED1-FC76-4885-8FBC-2E6AB214D54E%26c32%3Ddailymotion%257Ccan%26v32%3Ddailymotion%257Ccan%26v38%3Dvideo%26v39%3D2%253AM%253A25-50%26pe%3Dm_i%26pev3%3Ddailymotion_v4%26AQE%3D1%22%2C%22cbs%4075%25%22%3A%22http%3A%5C%2F%5C%2Fom.cbsi.com%5C%2Fb%5C%2Fss%5C%2Fcbsicansite%2Ccbsicbsiall%5C%2F0%5C%2FFAS-3.4.8-AS3%5C%2Fs69695424758829%3FAQB%3D1%26ndh%3D1%26ce%3DUTF-8%26ns%3Dcbsinteractive%26g%3Dhttp%253A%252F%252Fwww.dailymotion.com%252Fvideo%252Fx2kt3bj_forza-horizon-2-presents-fast-furious-launch-trailer_videogames%26events%3Devent59%2Cevent55%26v2%3Dus%26v3%3Ddesktop%2520web%26v5%3Dcbsicansite%26c25%3DForza%2BHorizon%2B2%2BPresents%2BFast%2B%2526%2BFurious%2B-%2BLaunch%2BTrailer%26v25%3DForza%2BHorizon%2B2%2BPresents%2BFast%2B%2526%2BFurious%2B-%2BLaunch%2BTrailer%26c31%3D3F3E642D-8110-41E8-9BB5-EE67AA0F6370%26v31%3D3F3E642D-8110-41E8-9BB5-EE67AA0F6370%26c32%3Ddailymotion%257Ccan%26v32%3Ddailymotion%257Ccan%26v38%3Dvideo%26v39%3D3%253AM%253A50-75%26pe%3Dm_i%26pev3%3Ddailymotion_v4%26AQE%3D1%22%2C%22cbs%40100%25%22%3A%22http%3A%5C%2F%5C%2Fom.cbsi.com%5C%2Fb%5C%2Fss%5C%2Fcbsicansite%2Ccbsicbsiall%5C%2F0%5C%2FFAS-3.4.8-AS3%5C%2Fs19950184370391%3FAQB%3D1%26ndh%3D1%26ce%3DUTF-8%26ns%3Dcbsinteractive%26g%3Dhttp%253A%252F%252Fwww.dailymotion.com%252Fvideo%252Fx2kt3bj_forza-horizon-2-presents-fast-furious-launch-trailer_videogames%26events%3Devent59%2Cevent58%26v2%3Dus%26v3%3Ddesktop%2520web%26v5%3Dcbsicansite%26c25%3DForza%2BHorizon%2B2%2BPresents%2BFast%2B%2526%2BFurious%2B-%2BLaunch%2BTrailer%26v25%3DForza%2BHorizon%2B2%2BPresents%2BFast%2B%2526%2BFurious%2B-%2BLaunch%2BTrailer%26c31%3DE5EA2DCF-C479-4E30-897D-9DEA466B66C8%26v31%3DE5EA2DCF-C479-4E30-897D-9DEA466B66C8%26c32%3Ddailymotion%257Ccan%26v32%3Ddailymotion%257Ccan%26v38%3Dvideo%26v39%3D4%253AM%253A75-100%26pe%3Dm_i%26pev3%3Ddailymotion_v4%26AQE%3D1%22%2C%22tracking_from_pr_0%22%3A%22http%3A%5C%2F%5C%2Fb.scorecardresearch.com%5C%2Fb%3Fc1%3D1%26c2%3D3002231%26c3%3D3000008%26c4%3D020500%26c5%3D010000%22%7D%2C%22relatedShown%22%3A%5B%22http%3A%5C%2F%5C%2Fwww.dailymotion.com%5C%2Fgravity%5C%2Freport%3Fevent_type%3DSHOW_RECOMMENDATION%26xid%3Dx2kt3bj%26algo%3Dbehavior-only%22%5D%2C%22adsErrorLog%22%3A%5B%22http%3A%5C%2F%5C%2Flogger-06.vty.dailymotion.com%5C%2Fdm%5C%2Fdesktop-windows%5C%2Fvideo_item%5C%2Fu%5C%2Fad%3Ft%3D516C12325922EDBB%26country%3DUS%26pid%3D5517171959398%26vl%3Den-us%26sv%3Den%26channel_id%3D14%26class%3Dofficial%26mode%3Dvod%26video_id%3D155881999%26r%3Dhttp%253A%252F%252Fwww.dailymotion.com%252Fvideo%252Fx2kt3bj_forza-horizon-2-presents-fast-furious-launch-trailer_videogames%26visitor_embedder%3D%26src_ref%3D%26visitor_referer%3D%26client_embedder%3D%26owner_id%3D80048714%26parent_id%3D80047786%26pos%3Dpreroll%26err%3D_ERRORCODE_%26publisher_id%3D21292%26tags%3DVTYPE_official%252CSMODE_vod%252CLANG_en%252CPAGE_playerPage%252CPTYPE_web%252CVDUR_short%252CPARENTID_80047786%252Cv1st_516C12325922EDBB%252Cpid_5517171959398%26w%3D_WIDTH_%26h%3D_HEIGHT_%26autoplay%3D0%26embedder%3D%26external%3D0%26referer%3D%26secure%3D0%26i%3Dl06oqj%26cn%3DColumbus%26rn%3DOhio%22%5D%7D%2C%22plugins%22%3A%5B%22http%3A%5C%2F%5C%2Fcdn.visiblemeasures.com%5C%2Fswf%5C%2Fas3%5C%2Fcurrent%5C%2Fbin%5C%2Fvmcdmplugin.swf%3Fkey%3D7f31e0630b6b11dfb7bd0019b9f1584b%26pixel%3D1%22%5D%2C%22extraParams%22%3A%7B%22playerName%22%3A%22Dailymotion+videoplayer%22%2C%22playerType%22%3A%22insite%22%2C%22playerLang%22%3A%22EN%22%2C%22playerAutoPlay%22%3A1%2C%22playerCountryCode%22%3A%22US%22%2C%22playerRemoteIP%22%3A%2275.180.54.187%22%2C%22playerAsNumber%22%3A%22AS10796%22%2C%22playerIsChromeless%22%3Afalse%2C%22playerEmbedder%22%3A%22http%3A%5C%2F%5C%2Fwww.dailymotion.com%5C%2Fus%22%2C%22playerEstatPlugin%22%3A%220%22%2C%22playerInIframe%22%3A%220%22%2C%22playerPromotedView%22%3Afalse%2C%22videoId%22%3A%22x2kt3bj%22%2C%22videoTitle%22%3A%22Forza+Horizon+2+Presents+Fast+%26+Furious+-+Launch+Trailer%22%2C%22videoDescription%22%3A%22Check+out+the+launch+trailer+for+the+Forza+Horizon+2+Presents+Fast+%26+Furious+standalone+expansion+for+Xbox+One+and+Xbox+360%22%2C%22videoTags%22%3A%22gaming%2Claunch%2CFast+Furious%2Cxbox+360%2Cjuego%2Cgame%2Cgamespot%2Cstandalone+expansion%2Cxbox+one%2Cgames%22%2C%22videoChannel%22%3A%22videogames%22%2C%22videoUniqueURL%22%3A%22http%3A%5C%2F%5C%2Fwww.dailymotion.com%5C%2Fvideo%5C%2Fx2kt3bj_forza-horizon-2-presents-fast-furious-launch-trailer_videogames%22%2C%22videoSwfURL%22%3A%22http%3A%5C%2F%5C%2Fwww.dailymotion.com%5C%2Fswf%5C%2Fvideo%5C%2Fx2kt3bj%22%2C%22videoPreviewURL%22%3A%22http%3A%5C%2F%5C%2Fs2.dmcdn.net%5C%2FJnwxz%5C%2Fx240-RVH.jpg%22%2C%22videoOwnerLogin%22%3A%22GameSpot%22%2C%22videoParentOwnerXid%22%3A%22x1bnp9m%22%2C%22videoLang%22%3A%22en%22%2C%22videoCountry%22%3A%22US%22%2C%22videoType%22%3A%22content%22%2C%22videoAudioOnly%22%3Afalse%2C%22videoIsExplicit%22%3Afalse%2C%22videoIsUserbrand%22%3Atrue%2C%22videoUploadDateTime%22%3A%222015-03-27+19%3A19%3A59%22%2C%22playerIsInstreamAdActivated%22%3Atrue%2C%22mediaDuration%22%3A59%2C%22scRSID%22%3A%22dailymotionwebvidprod%22%2C%22scSamplingRate%22%3A4%2C%22syndicationId%22%3A%220%22%2C%22streamMode%22%3A%22vod%22%2C%22videoIsVOD%22%3Afalse%2C%22videoIsSVOD%22%3Afalse%2C%22videoIsTVOD%22%3Afalse%2C%22videoIsAd%22%3Afalse%2C%22bestAvailableQuality%22%3A%22hd+720p%22%2C%22isrcID%22%3A%22%22%2C%22muyapID%22%3A%22%22%2C%22customSkin%22%3A%22%22%2C%22videoIsPrivate%22%3Afalse%2C%22videoLifetime%22%3A1%2C%22videoContext%22%3A%22video+page%22%2C%22userRevshare%22%3Afalse%2C%22videoProgram%22%3A%22partner%22%2C%22videoIsVerified%22%3Atrue%2C%22videoIsStudio%22%3Afalse%2C%22ownerType%22%3A%22partner%22%2C%22ownerIsVerified%22%3Atrue%2C%22noAdReason%22%3A%22ads%22%7D%7D%7D%5D%7D%2C%7B%22name%22%3A%22main%22%2C%22layerList%22%3A%5B%7B%22name%22%3A%22prerollSlot%22%2C%22type%22%3A%22LinearSlot%22%2C%22param%22%3A%7B%22position%22%3A%22preroll%22%7D%7D%2C%7B%22name%22%3A%22video%22%2C%22type%22%3A%22VideoFrame%22%2C%22param%22%3A%7B%22autoPlay%22%3A1%2C%22mute%22%3Afalse%2C%22expandVideo%22%3Afalse%2C%22mode%22%3A%22vod%22%2C%22stopAtEnd%22%3A1%2C%22clickThroughURL%22%3A%22%22%2C%22clickThroughHotspot%22%3Atrue%2C%22unmuteOnMouseOver%22%3A0%2C%22allowKeyboard%22%3Atrue%2C%22pauseOnClick%22%3Atrue%2C%22fullscreenOnDoubleClick%22%3Atrue%2C%22applicationName%22%3A%22com.dm.player%22%2C%22repeat%22%3A0%2C%22allowAutoDynamicStreamSwitch%22%3Atrue%2C%22video3DType%22%3A%22none%22%2C%22buttonMode%22%3Atrue%2C%22autoURL%22%3A%22http%3A%5C%2F%5C%2Fwww.dailymotion.com%5C%2Fcdn%5C%2Fmanifest%5C%2Fvideo%5C%2Fx2kt3bj.mnft%3Fauth%3D1427745801-2688-jvbhkkdc-49bdd03272df1dcd87516c187a95e0ca%22%2C%22allowStageVideo%22%3Atrue%2C%22start%22%3A0%2C%22enableAutoErrorMessages%22%3Atrue%2C%22adConfig%22%3A%5B%5D%7D%2C%22sequenceList%22%3A%5B%7B%22name%22%3A%22qualitySwitcher%22%2C%22layerList%22%3A%5B%7B%22name%22%3A%22qualitySwitcher%22%2C%22type%22%3A%22QualitySwitcher%22%2C%22param%22%3A%7B%22qualities%22%3A%7B%22ld%22%3A%7B%22description%22%3A%22Low%22%2C%22notification%22%3A%22You+are+now+watching+in+low+quality%22%7D%2C%22sd%22%3A%7B%22description%22%3A%22Medium%22%2C%22notification%22%3A%22You+are+now+watching+in+medium+quality+%22%7D%2C%22hq%22%3A%7B%22description%22%3A%22Standard%22%2C%22notification%22%3A%22You+are+now+watching+in+standard+quality%22%7D%2C%22hd720%22%3A%7B%22description%22%3A%22HD%22%2C%22notification%22%3A%22You+are+now+watching+in+High+Definition%22%7D%2C%22hd1080%22%3A%7B%22description%22%3A%22Full+HD%22%2C%22notification%22%3A%22You+are+now+watching+in+Full+HD%22%7D%2C%22auto%22%3A%7B%22description%22%3A%22Optimal%22%2C%22notification%22%3A%22You+are+now+watching+in+dynamic+quality+mode%22%7D%2C%22source%22%3A%7B%22description%22%3A%22Source%22%2C%22notification%22%3A%22You+are+now+watching+the+source+quality%22%7D%7D%7D%7D%5D%7D%2C%7B%22name%22%3A%22export%22%2C%22layerList%22%3A%5B%7B%22name%22%3A%22export%22%2C%22type%22%3A%22Export%22%2C%22param%22%3A%7B%22permalink%22%3A%22http%3A%5C%2F%5C%2Fwww.dailymotion.com%5C%2Fvideo%5C%2Fx2kt3bj_forza-horizon-2-presents-fast-furious-launch-trailer_videogames%22%2C%22hideHotspot%22%3Afalse%2C%22embedCode%22%3A%22%3Ciframe+frameborder%3D%5C%220%5C%22+width%3D%5C%22480%5C%22+height%3D%5C%22270%5C%22+src%3D%5C%22%5C%2F%5C%2Fwww.dailymotion.com%5C%2Fembed%5C%2Fvideo%5C%2Fx2kt3bj%5C%22+allowfullscreen%3E%3C%5C%2Fiframe%3E%3Cbr+%5C%2F%3E%3Ca+href%3D%5C%22http%3A%5C%2F%5C%2Fwww.dailymotion.com%5C%2Fvideo%5C%2Fx2kt3bj_forza-horizon-2-presents-fast-furious-launch-trailer_videogames%5C%22+target%3D%5C%22_blank%5C%22%3EForza+Horizon+2+Presents+Fast+%26amp%3B+Furious...%3C%5C%2Fa%3E+%3Ci%3Eby+%3Ca+href%3D%5C%22http%3A%5C%2F%5C%2Fwww.dailymotion.com%5C%2FGameSpot%5C%22+target%3D%5C%22_blank%5C%22%3EGameSpot%3C%5C%2Fa%3E%3C%5C%2Fi%3E%22%7D%7D%5D%7D%2C%7B%22name%22%3A%22actions%22%2C%22layerList%22%3A%5B%7B%22name%22%3A%22actions%22%2C%22type%22%3A%22VideoActions%22%2C%22param%22%3A%7B%22videoId%22%3A155881999%2C%22logged%22%3Afalse%2C%22autoHide%22%3Atrue%2C%22showCustomRightButton%22%3Atrue%2C%22redirectionErrorMessage%22%3A%22impossible+to+open+redirection%22%2C%22onMouseOutHideControlsDelay%22%3A500%2C%22hoverCloseLabel%22%3A%22Close+the+player%22%2C%22pauseOnActions%22%3Atrue%2C%22loginURL%22%3A%22%5C%2Fpageitem%5C%2FregisterOrLoginBox%3Furlback%3D%22%2C%22showQualityButton%22%3Atrue%2C%22qualityText%22%3A%22Quality%22%2C%22qualityButtonMessage%22%3A%22Select+video+quality%22%7D%7D%5D%7D%2C%7B%22name%22%3A%22controls%22%2C%22layerList%22%3A%5B%7B%22name%22%3A%22controls%22%2C%22type%22%3A%22MediaControls%22%2C%22param%22%3A%7B%22autoHide%22%3A1%2C%22audienceMessage%22%3A%22%25s+viewers%22%2C%22onMouseOutHideControlsDelay%22%3A500%2C%22mode%22%3A%22vod%22%2C%22contactSheetURL%22%3A%22http%3A%5C%2F%5C%2Fstatic2.dmcdn.net%5C%2Fstatic%5C%2Fvideo%5C%2F999%5C%2F188%5C%2F155881999%3Ajpeg_preview_contact.jpg%3F20150327192036%22%2C%22logoFeedbackLabel%22%3A%22Watch+on+Dailymotion%22%7D%7D%5D%7D%2C%7B%22name%22%3A%22overlaySlot%22%2C%22layerList%22%3A%5B%7B%22name%22%3A%22overlaySlot%22%2C%22type%22%3A%22NonLinearSlot%22%2C%22param%22%3A%7B%22position%22%3A%22overlay%22%2C%22creativeData%22%3A%7B%22LR_ADUNIT%22%3A%22ov%22%7D%7D%7D%5D%7D%2C%7B%22name%22%3A%22midrollSlot%22%2C%22layerList%22%3A%5B%7B%22name%22%3A%22midrollSlot%22%2C%22type%22%3A%22MidrollSlot%22%2C%22param%22%3A%7B%22position%22%3A%22midroll%22%2C%22creativeData%22%3A%7B%22LR_VIDEO_POSITION%22%3A%225%22%7D%7D%7D%5D%7D%5D%7D%2C%7B%22name%22%3A%22postrollSlot%22%2C%22type%22%3A%22LinearSlot%22%2C%22param%22%3A%7B%22position%22%3A%22postroll%22%2C%22creativeData%22%3A%7B%22LR_VIDEO_POSITION%22%3A%22100%25%22%7D%7D%7D%2C%7B%22name%22%3A%22relatedBackground%22%2C%22type%22%3A%22Background%22%2C%22param%22%3A%7B%22color%22%3A%22212121%22%7D%2C%22sequenceList%22%3A%5B%7B%22name%22%3A%22end%22%2C%22layerList%22%3A%5B%7B%22name%22%3A%22related%22%2C%22type%22%3A%22Related%22%2C%22param%22%3A%7B%22dataURL%22%3A%22http%3A%5C%2F%5C%2Fwww.dailymotion.com%5C%2Fjson%5C%2Frelated%5C%2F155881999%3Fwithgravity%3D1%26endscreen%3D1%22%2C%22clickTarget%22%3A%22_top%22%2C%22loadInPlace%22%3Afalse%7D%7D%5D%7D%2C%7B%22name%22%3A%22replay%22%2C%22layerList%22%3A%5B%7B%22name%22%3A%22replaybar%22%2C%22type%22%3A%22ReplayBar%22%2C%22param%22%3A%7B%22imageURL%22%3A%22http%3A%5C%2F%5C%2Fs2.dmcdn.net%5C%2FJnwxz%5C%2F100x57-xdJ.jpg%22%7D%7D%5D%7D%5D%7D%5D%7D%2C%7B%22name%22%3A%22feedback%22%2C%22layerList%22%3A%5B%7B%22name%22%3A%22feedback%22%2C%22type%22%3A%22Feedback%22%7D%5D%7D%5D%7D%5D%7D%5D%7D">
	</object> -->
<div class="container">
</div>
<script src="public/js/main.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61293947-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
