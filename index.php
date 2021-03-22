<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://img.icons8.com/clouds/100/000000/monitor.png" type="image/gif" sizes="16x16">
    <title>Down Time Checker</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
        .h1 {
            text-align: center;
            padding: 30px;
            background: rgb(37, 48, 54);
            background: linear-gradient(72deg, rgba(37, 48, 54, 1) 0%, rgba(30, 126, 185, 1) 25%, rgba(187, 28, 244, 1) 69%, rgba(98, 98, 98, 1) 100%, rgba(0, 212, 255, 1) 100%);
            color: white;
            font-family: courier;
            margin-top: 0px !important;
        }

        .table {
            margin: auto;
            width: 70%;
        }

        .code {
            position: fixed;
            bottom: 0;
            right: 0;
        }

        @media only screen and (max-width: 768px) {
            .table {
                width: 100%;
                font-size: 10px;
            }

            .code {
                float: none;
                text-align: center;
                position: static;
            }
        }
    </style>

</head>

<body>
    <h1 class="h1">
        This List Contains the Sites which are either Live or Down
    </h1>
    <table class='table table-striped table-hover table-bordered table-responsive'>
        <thead>
            <th style="text-align: center;">
                Website Name
            </th>
            <th style="text-align: center;">
                Status
            </th>
        </thead>
        <tbody>

            <?php

            function isSiteAvailible($url)
            {
                // Check, if a valid url is provided
                if (!filter_var($url, FILTER_VALIDATE_URL)) {
                    return false;
                }

                // Initialize cURL
                $curlInit = curl_init($url);

                // Set options
                curl_setopt($curlInit, CURLOPT_CONNECTTIMEOUT, 1);
                curl_setopt($curlInit, CURLOPT_HEADER, true);
                curl_setopt($curlInit, CURLOPT_NOBODY, true);
                curl_setopt($curlInit, CURLOPT_ENCODING, '');
                curl_setopt($curlInit, CURLOPT_RETURNTRANSFER, true);

                // Get response
                $response = curl_exec($curlInit);

                // Close a cURL session
                curl_close($curlInit);

                return $response ? true : false;
            }

            $URList = 'https://pocketlinux.com, https://internettablettalk.com, https://mattwagnercomics.com, https://myblog2u.com, https://crazedparent.org, https://aditel.org, https://ethicalocean.com, https://oniton.com, https://sportrichlist.com, https://pnews.org, https://johnkolbert.com, https://alanemrich.com, https://honkytonklondon.com, https://crowbarprotein.com, https://kelly-confidential.com, https://intrepidsoftware.com, https://jdocs.com, https://supportprop58.com, https://techcloud7.org, https://codefez.com, https://hispanicmarketinfo.com, https://brotherprintersupportnumber.com, https://asussupportphonenumber.com, https://windowstechnicalsupportnumbers.com, https://macbookcustomerservice.com, https://mymcafeeactivation.com, https://dawntechnology.net, https://uaeitcenter.com, https://webcoreconsulting.com, https://ultimoitsys.com, https://megphoto.com, https://alcnet.org, https://dangerrangers.com, https://cubemarketplace.com, https://clockworkengine.com, https://thedailysound.com, https://dhellandbrand.com, https://uaenoc.net, https://geohot.us, https://thebbps.com, https://stefanoverna.com, https://kingrootapkdownload.net, https://isisthescientist.com, https://rizonjet.com, https://americascanada.org, https://spdialer.com, https://fivechapters.com, https://holidayscentral.com, https://votepair.org, https://globalblacknews.com, https://iolosupportnumbers.com, https://mactechnicalsupportnumbers.com, https://outlooktechnicalsupportnumbers.com, https://allorahandmade.com, https://stereohyped.com, https://gonzalescannon.com, https://getautomatix.com, https://statesidephilly.com, https://wncgreenbuilding.com, https://globalcool.org, https://coverjunction.com, https://verbotennewyork.com, https://antivirussupport.org, https://emailsupports.net, https://Antivirussupports.info, https://Supportantivirus.co, https://microsoftsupport.co, https://hpsupports.co, https://lenovosupport.net, https://applesupportnumber.net, https://xboxsupport.org, https://epsonsupports.net, https://netgears.support, https://dellcustomersupportnumbers.com, https://1800customercarenumber.com, https://aoltechsupportnumber.com, https://chathelp.org, https://itunessupport.org, https://supportprop58.com, https://routersupport.org, https://quickbooksupports.co, https://babasupport.org, https://printerssupport.co, https://emailsupportnumber.org, https://HEMPORGANIC.NET, https://routerguide.org, https://fixerrorcodes.net, https://techpulse360.com, https://outlooktechsupport.org, https://errorcode0x.com, https://fixprintererror.com, https://fixroutererror.com, https://getsolved.org, https://hpsupporthelpline.com, https://hp123-printer-setups.com, https://foxdm.net, https://printererrorrepair.com, https://goodlifedesigns.co.uk, https://hptechnicalsupportnumber.co.uk, https://epsontechsupport.net, https://antivirussupportnumber.org, https://moneyadviceservice.net, https://forexmarketmentor.com, https://canonprintersupporthelpline.com, https://bestkitchengadgets.org, https://uaevatconsultants.net, https://forexmarketmentor.com, https://repair-errors.com, https://nationaldebtlines.co.uk, https://debtadvices.co.uk, https://Forextradingpower.com, https://binarysignalstips.com, https://dubaifixing.com, https://abcindubai.com, https://onlinegenius.in, https://routerexperts.net, https://windowstechnicalsupportnumbers.com, https://dellcustomersupportnumbers.com, https://1800customercarenumber.com, https://www.aoltechsupportnumber.com, https://www.printererrorrepair.com, https://www.epsonsupport247.com, https://www.hptechnicalsupportnumber.co.uk, https://www.acercustomerservice.com, https://www.windows7customersupport.com, https://www.yahoosupportphonenumber.com, https://www.gaminglaptoprepair.com, https://www.laptopsupportphonenumber.com, https://www.bitdefendersupportnumbers.com, https://www.canonprintercustomerservice.com, https://www.supportphonenumberaustralia.com, https://www.ciscosupportnumber.com, https://www.msofficetechnicalsupportnumbers.com, https://www.emailcustomersupportservice.com, https://www.lenovosupportphonenumbers.com, https://www.acersupportnumber.com, https://www.lenovosupportphonenumber.com, https://www.canonsupportnumber.org, https://www.kasperskyantivirussupport.com, https://windows7customersupport.com, https://gaminglaptoprepair.com, https://laptopsupportphonenumber.com, https://applemactechnicalsupportuk.com, https://macbookcustomerservice.com, https://mymcafeeactivation.com, https://uaetechnician.ae, https://laptopcharger.ae, https://laptopscreen.ae, https://techsupportdubai.com, https://macbookrepairdubai.net, https://techiesforumdubai.com, https://uaewebsitedevelopment.com, https://mobilerepairsdubai.net, https://macbookrepairdubai.com, https://irvinekart.com, https://f2help.com, https://uaedatarecovery.com, https://technology-squad.com, https://printersrepairnearme.com, https://compsecureinc.com, https://uaetechnician.com, https://byteanywhere.com, https://irvinedigitalmedia.com, https://training.irvinedigitalmedia.com, https://compsecureinc.com, https://matikomitservices.com, https://pcsupportsonline.com, https://www.frontrowitsolutions.org, https://irvineinfocom.com, https://supersecureweb.com, https://mycybercare.ae, https://livetechnicians.in, https://dailycomputersolutions.com, https://ncevirtualconsulting.com, https://adinitsolution.com, https://alltimetechsupport.net, https://pcgeekguru.com, https://pcgeekssquad.com, https://pcgeeksupports.com, https://pcgeeksupportonline.com, https://geekprosolution.com, https://accountingsoftwaressupport.com, https://canonprintercustomerservice.com, https://supportphonenumberaustralia.com, https://ciscosupportnumber.com, https://roomeo247.co, https://goldentargettrading.com, https://dawntechnologyllc.com, https://adinithouse.com, https://mapsupdates.org, https://indiapropertyclinic.com, https://naturalproshops.com, https://documentranslations.net, https://irvinepolymer.com, https://absolutefab.net, https://safeharbourship.com, https://techonline.world, https://globalhospitalnoida.com, https://indiapropertyclinic.in, https://fixweberrors.com, https://adinitcenter.com, https://paansingh.com, https://absbag.com, https://securemyserver.org, https://intrasofttechnology.com, https://lenovosupportphonenumbers.com, https://acersupportnumber.com, https://lenovosupportphonenumber.com, https://itsolutionshouse.com, https://gennexttechnology.com, https://awazeuttarpradesh.com, https://chauchak.com, https://techntradestore.com, https://techntradeinc.us, https://ziqarcleanserv.com, https://support-nortons.com, https://office-microsofts.com, https://productivvweb.com, https://tarasysinfo.com, https://myofficekoncept.com, https://msofficeproducts.com, https://thestepchange.com, https://step-change.org.uk, https://step-changes.com, https://forexmarketmentor.com, https://DebtReliefSupport.org, https://steptochanges.com, https://cotextiles.com, https://canonsupportnumber.org, https://kasperskyantivirussupport.com, https://applemactechnicalsupportuk.com, https://binarysignalstips.com, https://nationaldebtsupport.co.uk, https://bestshockers.com, https://canadawebdevelopment.com, https://dawnitcenter.com, https://techntradeinc.com, https://bright-phoenix.com, https://truesahajyogasharmabhavan.org, https://roomeo247.co, https://debtadvicehelp.org, https://lawfirmdubai.net, https://websitedesigningdubai.com, https://mathimp.org, https://legalfirmsdubai.ae, https://preetiinternational.com, https://laptopbattery.ae, https://wefixdubai.com, https://localservice.ae, https://maidsindubai.ae, https://dubai-cleaners.com, https://aircondrepairdubai.com, https://goldentargettrading.com, https://revivalnewyork-me.com, https://yallajoylive.com, https://tntcarrental.com, https://goldentimegeneralcontracting.com, https://brandvan.ae, https://smsconfectionaries.com, https://uttamlodhi.com, https://maidagencydubai.com, https://appliancerepairsandmore.com, https://printerrepairnearme.ae, https://sanacarliftdubai.com, https://pestcontroldubaiprice.com, https://secondhanddubai.com, https://actechnician.ae, https://handyman-dubai.com, https://urbanclap.ae, https://mobilerepairdubai.net, https://f2help.com, https://mailhelp.net, https://aldarintr.com, https://acuvat.com, https://al-ardh.com, https://mkinternational.ae, https://papilloncake.com, https://fbbsol.com, https://carmelointernational.ae, https://nationlivenews.in, https://gpsupdates.net, https://specialdishesonline.com, https://printersupports.co, https://laptoptechsupportnumbers.com, https://laptoptechsupportnumbers.com, https://thedailytech.co, https://digitalpraise.com, https://robinhoweb.com, https://dubaipaintcompany.com, https://hptechnicalsupportphonenumbersusa.com, https://hptechsupportnumbers.com, https://appletechnicalsupportnumbers.com, https://damatiinfotech.com, https://intiqa.com, https://LPPGLOBAL.COM, https://geostarsupply.com, https://dibbawater.com, https://zafcomm.ae, https://penguin.taxi, https://sherif-wadood.com, https://gmailtechnicalsupportnumbers.com, https://nortonantivirustechsupportnumbers.com, https://avgantivirussupportnumber.com, https://mcafeeantivirussupportnumbers.com, https://kasperskyantivirussupportnumber.com, https://canonprintersupportnumbers.com, https://browsertechnicalsupportnumbers.com, https://routertechnicalsupportnumbers.com, https://netgearroutersupportnumber.com, https://linksysroutersupportnumber.com, https://applemacsupportnumbers.com, https://applesupportphonenumbers.com, https://vegamaritime.biz, https://fastwayfinancing.com, https://maatikraft.com, https://debtreliefsupport.org, https://group-emirates.com, https://vertex-sts.com, https://excellencefootballacademy.com, https://iaie.net, https://brotherprintersupportnumbers.com, https://ipadsupportnumber.com, https://iphonesupportnumber.com, https://asussupportnumber.com, https://toshibasupportphonenumber.com, https://emailcustomercareservice.com, https://adobesupportphonenumber.com, https://emailsupportnumbers.net, https://applemactechnicalsupportnumber.co.uk, https://windowserrorsrepair.com, https://brotherprintersupportnumber.co.uk, https://canonprintersupportnumber.co.uk';
            $up = "Live";
            $down = "Down";
            $URLs = explode(", ", $URList);
            $sites = count($URLs);


            foreach ($URLs as $URL) {
                echo " 
                   <tr>
                    <td>
                        $URL
                    </td>
                    ";
                if (isSiteAvailible($URL)) {
                    echo "
                    <td style='text-align: center'>
                        <a href='$URL' target='_blank' class='btn btn-primary'>$up</a>
                    </td>
                        
                    </tr>";
                } else {
                    echo "
                    <td style='text-align: center'>
                        <a href='$URL' target='_blank' class='btn btn-danger'>$down</a>
                    </td>
                        
                    </tr>";
                }
            }

            ?>


        </tbody>
    </table>
    <code class="code">Create with <span style="color: red;">&hearts;</span> by Sabir</code>
</body>

</html>