<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>

<body>

<?php include 'navbar.php'; ?>



<main role="main">

    <div class="container">

        <div class="form-wrapper">


            <h2>
                Profile
            </h2>




            <h3>
                Add information about yourself to share on your profile.
            </h3>





            <form action="https://www.udemy.com/user/edit-profile/" method="post" class="ng-pristine ng-valid"> <input type="hidden" name="csrfmiddlewaretoken" value="6wcqEUSWIfOSv73IPMyELWcV6wWU37mDprpWvs0OmSZbvMrrVbeKk8FzH1aqxOkN" autocomplete="off"> <div class="manage-fields-wrapper sectioned"> <div class="form-field-container  labeled form-section" id="form-item-name"> <label class="control-label " for="id_name">Basics:</label> <div id="tooltip-reference-name" class="tooltip-reference pos-r "> <input class="textinput textInput form-control" id="id_name" maxlength="64" name="name" placeholder="First Name" type="text" value="Muzahidul" required=""> </div>
                    </div> <div class="form-field-container  non-labeled form-section" id="form-item-surname"> <div id="tooltip-reference-surname" class="tooltip-reference pos-r "> <input class="textinput textInput form-control" id="id_surname" maxlength="64" name="surname" placeholder="Last Name" type="text" value="Islam" required=""> </div>
                    </div> <div class="form-field-container  non-labeled form-section" id="form-item-job_title"> <div id="tooltip-reference-job_title" class="tooltip-reference pos-r "> <div class="ud-app-loader ud-component--form-fields--form-control-with-counter ud-app-loaded" data-module-id="form-fields" ng-non-bindable=""><div data-reactroot="" class="form-control-counter-container"><input type="text" maxlength="60" name="job_title" placeholder="Headline" id="id_job_title" class="textinput textInput form-control form-control" value=""><div class="form-control-counter" data-purpose="form-control-counter">60</div></div></div> <div class="help-block">Add a professional headline like, 'Engineer at Udemy' or 'Architect.'</div> </div>
                    </div> <div class="form-field-container  labeled form-section" id="form-item-description"> <label class="control-label " for="id_description">Biography:</label> <div id="tooltip-reference-description" class="tooltip-reference pos-r "> <div class="ud-app-loader ud-component--form-fields--rich-textarea ud-app-loaded" data-module-id="form-fields" ng-non-bindable=""><div class="redactor-box" role="application" dir="ltr"><ul class="redactor-toolbar" id="redactor-toolbar-0" role="toolbar" style="position: relative; width: auto; top: 0px; left: 0px; visibility: visible;"><li><a href="javascript:void(null);" class="re-button re-bold" title="Bold" rel="bold" role="button" aria-label="Bold" tabindex="-1"><i class="udi udi-bold"></i></a></li><li><a href="javascript:void(null);" class="re-button re-italic" title="Italic" rel="italic" role="button" aria-label="Italic" tabindex="-1"><i class="udi udi-italic"></i></a></li></ul><span class="redactor-voice-label" id="redactor-voice-0" aria-hidden="false">Rich text editor</span><div class="redactor-editor redactor-editor-img-edit redactor-in" aria-labelledby="redactor-voice-0" role="presentation" id="redactor-uuid-0" contenteditable="true" dir="ltr" style="min-height: 40px;"><p>&#8203;</p></div><textarea data-reactroot="" name="description" style="display: none;"></textarea></div></div> <div class="help-block"><div>Links are not allowed here but are allowed in the link section below. Coupon codes are not permitted.</div><div>For instructors, your biography should have at least 50 words.</div></div> </div>
                    </div> <div class="form-field-container  non-labeled form-section" id="form-item-locale"> <div id="tooltip-reference-locale" class="tooltip-reference pos-r "> <select class="select form-control" id="id_locale" name="locale" required="">
                                <option value="">-- Select Language --</option>
                                <option value="de_DE">Deutsch</option>
                                <option value="en_US" selected="selected">English (US)</option>
                                <option value="es_ES">Español (España)</option>
                                <option value="fr_FR">Français (France)</option>
                                <option value="it_IT">Italiano</option>
                                <option value="ja_JP">日本語</option>
                                <option value="ko_KR">한국어</option>
                                <option value="nl_NL">Nederlands</option>
                                <option value="pl_PL">Polski</option>
                                <option value="pt_BR">Português (Brasil)</option>
                                <option value="ru_RU">Русский</option>
                                <option value="tr_TR">Türkçe</option>
                                <option value="zh_CN">中文(简体)</option>
                                <option value="zh_TW">中文 (繁體)</option>
                            </select> </div>
                    </div> <div class="form-field-container  labeled form-section border-top" id="form-item-website_url"> <label class="control-label " for="id_website_url">Links:</label> <div id="tooltip-reference-website_url" class="tooltip-reference pos-r "> <input class="urlinput form-control" id="id_website_url" name="website_url" placeholder="Website (http(s)://..)" type="url"> </div>
                    </div> <div class="form-field-container  non-labeled form-section " id="form-item-google_profile"> <div id="tooltip-reference-google_profile" class="tooltip-reference pos-r "> <div class="controls "> <div class="input-group"> <span class="input-group-addon">https://plus.google.com/</span> <input class="textinput textInput form-control" id="id_google_profile" maxlength="128" name="google_profile" placeholder="Google+ Link" type="text"> </div> </div> <div class="help-block">Add your Google+ profile name (e.g. +JohnSmith or 33338888789996)</div> </div>
                    </div> <div class="form-field-container  non-labeled form-section" id="form-item-twitter_profile"> <div id="tooltip-reference-twitter_profile" class="tooltip-reference pos-r "> <div class="controls "> <div class="input-group"> <span class="input-group-addon">http://twitter.com/</span> <input class="textinput textInput form-control" id="id_twitter_profile" maxlength="128" name="twitter_profile" placeholder="Twitter Profile" type="text"> </div> </div> <div class="help-block">Add your Twitter username (e.g. johnsmith).</div> </div>
                    </div> <div class="form-field-container  non-labeled form-section" id="form-item-facebook_profile"> <div id="tooltip-reference-facebook_profile" class="tooltip-reference pos-r "> <div class="controls "> <div class="input-group"> <span class="input-group-addon">http://www.facebook.com/</span> <input class="textinput textInput form-control" id="id_facebook_profile" maxlength="128" name="facebook_profile" placeholder="Facebook Profile" type="text"> </div> </div> <div class="help-block">Input your Facebook username (e.g. johnsmith).</div> </div>
                    </div> <div class="form-field-container  non-labeled form-section" id="form-item-linkedin_profile"> <div id="tooltip-reference-linkedin_profile" class="tooltip-reference pos-r "> <div class="controls "> <div class="input-group"> <span class="input-group-addon">http://www.linkedin.com/</span> <input class="textinput textInput form-control" id="id_linkedin_profile" maxlength="128" name="linkedin_profile" placeholder="LinkedIn Profile" type="text"> </div> </div> <div class="help-block">Input your LinkedIn resource id (e.g. in/johnsmith).</div> </div>
                    </div> <div class="form-field-container  non-labeled form-section" id="form-item-youtube_profile"> <div id="tooltip-reference-youtube_profile" class="tooltip-reference pos-r "> <div class="controls "> <div class="input-group"> <span class="input-group-addon">http://www.youtube.com/</span> <input class="textinput textInput form-control" id="id_youtube_profile" maxlength="128" name="youtube_profile" placeholder="Youtube Profile" type="text"> </div> </div> <div class="help-block">Input your Youtube username (e.g. johnsmith).</div> </div>
                    </div>

                </div>
                <div class="form-actions"> <div class="submit-row"> <input type="submit" name="submit" value="Save" class="btn btn-primary " id="submit-id-submit">

                    </div>

                </div> <input id="id_ignore_warnings" name="ignore_warnings" type="hidden" value="False" autocomplete="off"> </form>


        </div>

    </div>

</main>



<?php include 'signinpop.php'; ?>

<?php include 'footer.php'; ?>
</body>
</html>

