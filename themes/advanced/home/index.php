<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gloria degli Antichi GDR</title>
        <link rel="shortcut icon" href="../favicon.ico" />
        <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' />
        <link href='https://fonts.googleapis.com/css?family=Average' rel='stylesheet' /> 
    </head>
    <style>
        body{
            background:url(http://gloryofancient.altervista.org/imgs/sfondo_generale.jpg) repeat;
            font-family:'Average';
            font-size:12.5px;
        }
        #iubenda-cs-banner{
            top:0!important;
            left:0!important;
            position:fixed!important;
            width:100%!important;
            z-index:99999998!important;
            background:#000;
            background:rgba(0,0,0,.85)
        }
        .iubenda-cs-content{
            display:block;
            margin:0 auto;
            padding:10px 50px 10px 20px;
            width:auto;
            font-family:Helvetica,Arial,FreeSans,sans-serif;
            font-size:12px;
            color:#fff!important
        }
        .iubenda-cs-rationale{
            max-width:900px;
            position:relative;
            margin:0 auto
        }
        .iubenda-banner-content>p{
            font-family:Helvetica,Arial,FreeSans,sans-serif;
            line-height:1.5
        }
        .iubenda-cs-close-btn{
            color:#fff!important;
            text-decoration:none;
            font-size:12px;
            position:absolute;
            top:-5px;
            right:-20px;
            border:1px solid #fff!important;
            display:inline-block;
            width:20px;
            height:20px;
            line-height:20px;
            text-align:center;
            border-radius:10px
        }
        .iubenda-cs-cookie-policy-lnk{
            text-decoration:underline;
            color:#fff!important;
            font-size:12px;
            font-weight:900
        }
    </style>

    <script type="text/javascript">/*<![CDATA[*/
        var _iub = _iub || [];
        _iub.csConfiguration = {
            siteId: 383380, cookiePolicyId: 339153, lang: 'it', localConsentDomain: 'gloryofancient.altervista.org',
            banner: {applyStyles: false, content: "Questo sito utilizza cookie di terze parti per inviarti pubblicit&agrave; in linea con le tue preferenze. Se vuoi saperne di pi&ugrave; o negare il consenso a tutti o ad alcuni cookie, %{cookie_policy_link}. Chiudendo questo banner, scorrendo questa pagina, cliccando su un link o proseguendo la navigazione in altra maniera, acconsenti all&apos;uso dei cookie.", cookiePolicyLinkCaption: "clicca qui"}
        };
        (function (w, d) {
            var loader = function () {
                var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0];
                s.src = "//cdn.iubenda.com/cookie_solution/iubenda_cs.js";
                tag.parentNode.insertBefore(s, tag);
            };
            if (w.addEventListener) {
                w.addEventListener("load", loader, false);
            } else if (w.attachEvent) {
                w.attachEvent("onload", loader);
            } else {
                w.onload = loader;
            }
        })(window, document);
        /*]]>*/</script>

    <body>
        <?php
        ?><div id="main">
            <img src="../imgs/base_logoimm.png">

            <div id="site_width">

                <div id="header">
                    <a href="//www.iubenda.com/privacy-policy/339153" class="iubenda-white iubenda-embed" title="Privacy Policy">Privacy Policy</a>
                    <script type="text/javascript">(function (w, d) {
                            var loader = function () {
                                var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0];
                                s.src = "//cdn.iubenda.com/iubenda.js";
                                tag.parentNode.insertBefore(s, tag);
                            };
                            if (w.addEventListener) {
                                w.addEventListener("load", loader, false);
                            } else if (w.attachEvent) {
                                w.attachEvent("onload", loader);
                            } else {
                                w.onload = loader;
                            }
                        })(window, document);</script>

                    <div class="login_form">

                        <form action="login.php" id="do_login" method="post"<?php
                        if ($PARAMETERS['mode']['popup_choise'] == 'ON') {
                            echo ' onsubmit="check_login(); return false;"';
                        }
                        ?>>
                            <div>
                                <span class="form_label"><label for=""><?php echo $MESSAGE['homepage']['forms']['username']; ?></label></span>
                                <input type="text" id="username" name="login1" />
                            </div>
                            <div>
                                <span class="form_label"><label for=""><?php echo $MESSAGE['homepage']['forms']['password']; ?></label></span>
                                <input type="password" id="password" name="pass1" />
                            </div>
                            <?php if ($PARAMETERS['mode']['popup_choise'] == 'ON') { ?>
                                <div>
                                    <span class="form_label"><label for="allow_popup"><?php echo $MESSAGE['homepage']['forms']['open_in_popup']; ?></label></span>
                                    <input type="checkbox" id="allow_popup" />
                                    <input type="hidden" value="0" name="popup" id="popup">
                                </div>
                            <?php } ?>
                            <input type="submit" value="<?php echo $MESSAGE['homepage']['forms']['login']; ?>" />
                        </form>
                        <div class="side_modules">
                            <?php if (empty($RP_response)) { ?>
                                <strong><?php echo gdrcd_filter('out', $MESSAGE['homepage']['forms']['forgot']); ?></strong>

                                <div class="pass_rec">
                                    <form action="index.php" method="post">
                                        <div>
                                            <span class="form_label"><label for="passrecovery"><?php echo $MESSAGE['homepage']['forms']['email']; ?></label></span>
                                            <input type="text" id="passrecovery" name="email" />
                                        </div>
                                        <input type="submit" value="<?php echo $MESSAGE['homepage']['forms']['new_pass']; ?>" />
                                    </form>
                                </div>
                            <?php } else { ?>
                                <div class="pass_rec">
                                    <?php echo $RP_response; ?>
                                </div>
                            <?php } ?>


                            <div id="footer">

                                <div>
                                    <p><?php echo gdrcd_filter('out', $PARAMETERS['info']['site_name']), ' - ', gdrcd_filter('out', $MESSAGE['homepage']['info']['webm']), ': ', gdrcd_filter('out', $PARAMETERS['info']['webmaster_name']), ' - ', gdrcd_filter('out', $MESSAGE['homepage']['info']['dbadmin']), ': ', gdrcd_filter('out', $PARAMETERS['info']['dbadmin_name']), ' - ', gdrcd_filter('out', $MESSAGE['homepage']['info']['email']), ': <a href="mailto:', gdrcd_filter('out', $PARAMETERS['info']['webmaster_email']), '">', gdrcd_filter('out', $PARAMETERS['info']['webmaster_email']), '</a>.'; ?></p>
                                    <p><?php echo $CREDITS, ' ', $LICENCE ?></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <?php
                /**                 * MENU CON IMMAGINI CLICCABILI

                 */
                ?>
                <div id="content">

                    <div class="sidecontent">
                        <table border=0  cellpadding="0" width=350px>
                            <tr><td colspan="3"><img src="themes/advanced/imgs/home2/top_menu_home.png"></td></tr>
                            <tr><td align=right><a href="iscrizione.php">
                                        <img src="themes/advanced/imgs/home2/iscriviti_off.png" onmouseover="this.src = 'themes/advanced/imgs/home2/iscriviti_on.png'" onmouseout="this.src = 'themes/advanced/imgs/home2/iscriviti_off.png'"></a></td>
                                <td><a href="index.php"><img src="themes/advanced/imgs/home2/login_off.png" onmouseover="this.src = 'themes/advanced/imgs/home2/login_on.png'" onmouseout="this.src = 'themes/advanced/imgs/home2/login_off.png'"></a></td>
                                <td align=left><a href="javascript:;" onclick="window.open('http://gloryofancient.wixsite.com/goawiki', 'GoaWiki', 'width=1066, height=650, resizable, status, scrollbars=1, location');">
                                        <img src="themes/advanced/imgs/home2/wiki_off.png" onmouseover="this.src = 'themes/advanced/imgs/home2/wiki_on.png'" onmouseout="this.src = 'themes/advanced/imgs/home2/wiki_off.png'"></a></td>
                            <tr><td width=360px colspan="3"><img src="themes/advanced/imgs/home2/base_menu_home.png"></td></tr>
                        </table>



                    </div>

                </div>
            </div>

        </div>