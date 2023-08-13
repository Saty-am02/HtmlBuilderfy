<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title id="titletagmain">Html bUildfy</title>
  <link rel="stylesheet" href="{{asset('frontend/bootcss/bootstrap.min.css')}}">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/htmlcodegen1.css')}}">
</head>
<body>
  <section>
    <div class="container px-5">
      <h1 class="text-white my-4">HTML Code Generator</h1>
      <div class="row">
        <!-- left side -->
        <div class="col-6">
          <form class="form">
            <div id="card1" class="card mb-4">
              <div class="card-header">
                <div id="radio" class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedtitlemeta" checked>
                  <label class="form-check-label text-white" for="flexCheckChecked">
                    Title & Meta
                  </label>
                </div>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label class="text-white" id="">Title</label>
                  <input type="text" class="form-control" id="title" placeholder="HTML Code Generator Online">
                </div>
                <div class="form-group">
                  <label class="text-white" id=>Description of webpage</label>
                  <input type="text" class="form-control" id="Description" placeholder="Description of webpage">
                </div>
                <div class="form-group">
                  <label class="text-white">Keywords related to webpage
                  </label>
                  <input type="text" class="form-control" id="keyword" placeholder="Keywords related to webpage ">
                </div>


                <h5 class="card-title"></h5>
                <h6 class="card-subtitle mb-2 text-muted "></h6>
                <p class="card-text"></p>
              </div>
            </div>
            <div id="card2" class="card">
              <div class="card-header">
                <div id="radio" class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedheading" checked>
                  <label class="form-check-label text-white" for="flexCheckChecked">
                    Heading Tag
                  </label>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="text-white">Heading Name
                      </label>
                      <input type="text" class="form-control" id="headingname" placeholder="Heading Name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="text-white">Tags</label>
                      <select class="form-control" id="headingselectedtag">
                        <option value="h1">h1</option>
                        <option value="h2">h2</option>
                        <option value="h3">h3</option>
                        <option value="h4">h4</option>
                        <option value="h5">h5</option>
                        <option value="h5">h6</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="input-group mb-4">
                      <div id="radio" class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedheadletterspacing">
                        <label style="font-size: 12.7px;" class="form-check-label text-white"
                          for="flexCheckCheckedletterspacing">
                          Letter-spacing
                          <br><div class="input-group-append" style="margin-top: 10px;">
                          <input type="number" class="form-control" placeholder="" id="headingletterspacing">
              
                            <span class="input-group-text" id="basic-addon2">px</span>
                          </div>
                        </label>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="col-md-4">
                    <div>
                      <div class="form-group">
                        <label class="text-white">Font-Family</label>
                        <select class="form-control" id="fontfamilyheadingselectedtag">
                          <option value="Arial">Arial</option>
                          <option value="Helvetica">Helvetica</option>
                          <option value="Impact">Impact</option>
                          <option value="Impact">Verdana</option>
                          <option value="Times Roman">Times Roman</option>
                          <option value="Georgia">Georgia</option>
                          <option value="Garamond">Garamond</option>
                          <option value="Cursive">Cursive</option>
                        </select>
                      </div>
                    </div>


                  </div> -->
                  <div class="col-md-4">
                    <div>
                      <div class="form-group">
                        <label class="text-white">Align</label>
                        <select class="form-control" id="alignheadingselectedtag">
                          <option value="Default">Default</option>
                          <option value="Left">Left</option>
                          <option value="Center">Center</option>
                          <option value="Right">Right</option>
                          <option value="Justified">Justified</option>
                        </select>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-15">
                    <div class="form-group">
                      <div id="radio" class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedFont-Variant">
                        <label class="form-check-label text-white" for="flexCheckChecked">
                          Font-Variant
                        </label>
                      </div>
                      <select class="form-control" id="Font-Variantheadingselectedtag">
                        <option value="normal">normal</option>
                        <option value="small-caps">small-caps</option>

                      </select>
                    </div>
                  </div>
                  <div class="col-md-6" style="margin-top: -10px;">
                    <div class="form-group">
                      <div id="radio" class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="headingbgcolorflexCheckChecked">
                        <label class="form-check-label text-white" for="flexCheckChecked">
                          Bg-Color
                        </label>
                      </div>
                      <input class="input-color-h" name="bg" value="#fffff" type="color" id="headingbgcolor">
                    </div>
                  </div>
                  <div class="col-md-6" style="margin-top: -10px;">
                    <div class="form-group">
                      <div id="radio" class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="headingfgcolorflexCheckChecked">
                        <label class="form-check-label text-white" for="flexCheckChecked">
                          Font-Color
                        </label>
                      </div>
                      <input class="input-color-font" name="bg" value="#2f2f2f" type="color" id="headingfgcolor">
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </form>
        </div>
        <!-- Right side -->
        <div class="col-6">
          <form class="form">
            <div id="card1" class="card mb-4">
              <div class="card-header">
                <div id="radio" class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedparagraphtag" checked>
                  <label class="form-check-label text-white" for="flexCheckChecked">
                    Paragraph Tag
                  </label>
                </div>
              </div>
              <div class="card-body">

                <div class="row">

                  <div class="form-group">
                    <label class="text-white">Paragraph Text</label>
                    <input type="text" class="form-control" id="paragraphtext" placeholder="Write your text here...">
                    <div>
                      <div class="row">
                        <div class="col-md-4" style="margin-top: 13px;">
                          <div>
                            <div class="form-group">
                              <label class="text-white">Font-Family</label>
                              <select class="form-control" id="paragraphfontfamilyselectedtag">
                                <option value="Arial">Arial</option>
                                <option value="Helvetica">Helvetica</option>
                                <option value="Impact">Impact</option>
                                <option value="Verdana">Verdana</option>
                                <option value="Times Roman">Times Roman</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Garamond">Garamond</option>
                                <option value="Cursive">Cursive</option>
                              </select>
                            </div>
                          </div>

                        </div>
                        <div class="col-md-4" style="margin-top: 13px;">
                          <div>
                            <div class="form-group mb-3">
                              <label class="text-white">Align</label>
                              <select class="form-control" id="paragraphalignselectedtag">
                                <option value="Default">Default</option>
                                <option value="Left">Left</option>
                                <option value="Center">Center</option>
                                <option value="Right">Right</option>
                                <option value="Justified">Justified</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4" style="margin-top: 13px;">
                          <div class="input-group mb-4 ">
                            <div id="radio" class="form-check mb-">
                              <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckCheckedparagraphfont-size">
                              <label style="font-size: 15px;" class="form-check-label text-white"
                                for="flexCheckChecked">
                                Font-Size
                                <br><div class="input-group-append" style="margin-top: 6px;">
                                  <br><input type="number" class="form-control" id="paragraphfontsize" style="width: 80px;">
                    
                                  <span class="input-group-text" id="basic-addon2">px</span>
                                </div>
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <div id="radio" class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckCheckedparagraphbgcolor">
                              <label class="form-check-label text-white" for="flexCheckChecked">
                                Bg-Color
                              </label>
                            </div>
                            <input class="input-color-hp" name="bg" value="#fffff" type="color" id="paragrapgbgcolor">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <div id="radio" class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckCheckedparagraphfgcolot">
                              <label class="form-check-label text-white" for="flexCheckChecked">
                                Font-Color
                              </label>
                            </div>
                            <input class="input-color-fontp" name="bg" value="#2f2f2f" type="color"
                              id="paragraphfgcolor">
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  <!-- <div class="col-md-4">
                    <div class="input-group mb-2">
                      <div id="radio" class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value=""
                          id="flexCheckCheckedparagraphlrtterspacing">
                        <label style="font-size: 11px;" class="form-check-label text-white" for="flexCheckChecked">
                          Letter-spacing
                        </label>
                      </div>

                      <input type="number" class="form-control" placeholder="12" id="paragraphletterspacing">
                      <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2">px</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="input-group mb-2">
                      <div id="radio" class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value=""
                          id="flexCheckCheckedparagraphlineheight">
                        <label style="font-size: 11px;" class="form-check-label text-white" for="flexCheckChecked">
                          Line-height
                        </label>
                      </div>

                      <input type="number" class="form-control" placeholder="0" id="paragraphlineheight">
                      <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2">px</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="input-group mb-2">
                      <div id="radio" class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value=""
                          id="flexCheckCheckedparagraphtextindent">
                        <label style="font-size: 11px;" class="form-check-label text-white" for="flexCheckChecked">
                          Text-indent
                        </label>
                      </div>

                      <input type="number" class="form-control" placeholder="0" id="paragraphtextindent">
                      <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2">px</span>
                      </div>
                    </div>
                  </div> -->

                  <div class="col-md-4">
                    <div class="form-group">
                      <div id="radio" class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value=""
                          id="flexCheckCheckedparagraphfontstyle">
                        <label class="form-check-label text-white" for="flexCheckChecked">
                          Font-Style
                        </label>
                      </div>
                      <select class="form-control" id="paragraphfontstyle">
                        <option value="normal">normal</option>
                        <option value="italic">italic</option>
                        <option value="oblique">oblique</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <div id="radio" class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value=""
                          id="flexCheckCheckedparagraphfontweight">
                        <label style="font-size: 11px;" class="form-check-label text-white" for="flexCheckChecked">
                          Font-Weight
                        </label>
                      </div>
                      <select class="form-control" id="paragraphfontweight">
                        <option value="normal">normal</option>
                        <option value="bold">bold</option>

                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <div id="radio" class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value=""
                          id="flexCheckCheckedparagraphfontvariant">
                        <label class="form-check-label text-white" for="flexCheckChecked">
                          Font-Variant
                        </label>
                      </div>
                      <select class="form-coltrol" id="paragraphfontvariant" style="height:30px; border-radius: 4px;">
                        <option value="normal">normal</option>
                        <option value="small-caps">small-caps</option>

                      </select>
                    </div>
                  </div>
                </div>

                <h5 class="card-title"></h5>
                <h6 class="card-subtitle mb-2 text-muted "></h6>
                <p class="card-text"></p>
              </div>
            </div>
            <div id="card2" class="card">
              <div class="card-header">
                <div id="radio" class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedBg" checked>
                  <label class="form-check-label text-white" for="flexCheckChecked">
                    Background Tag
                  </label>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <div id="radio" class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedbgimage">
                        <label class="form-check-label text-white" for="flexCheckChecked">
                          Background-Image
                        </label>
                      </div>
                      <input type="img" class="form-control" placeholder="Paste Image URl Here.." id="bgimg">

                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div id="radio" class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedbgrepeat">
                        <label class="form-check-label text-white" for="flexCheckChecked">
                          Background-Repeat
                        </label>
                      </div>
                      <select class="form-control" id="bgrepeat">
                        <option value="no-repeat">no-repeat</option>
                        <option value="repeat-x">repeat-x</option>
                        <option value="repeat-y">repeat-y</option>
                        <option value="space">space</option>
                        <option value="round">round</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div id="radio" class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedidbgattachment">
                        <label class="form-check-label text-white" for="flexCheckChecked">
                          Bg-Attachment
                        </label>
                      </div>
                      <select class="form-control" id="bgattachment">
                        <option value="fixed">Fixed</option>
                        <option value="scroll">Scroll</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div id="radio" class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedbgposition">
                        <label class="form-check-label text-white" for="flexCheckChecked">
                          Bg-Position
                        </label>
                      </div>
                      <select class="form-control" id="bgposition">
                        <option value="left top">left top</option>
                        <option value="left bottom">left bottom</option>
                        <option value="left center">left center</option>
                        <option value="right top">right top</option>
                        <option value="right center">right center</option>
                        <option value="right bottom">right bottom</option>
                        <option value="center top">center top</option>
                        <option value="center bottom">center bottom</option>
                        <option value="center center">center center</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div id="radio" class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedbgbgcolor">
                        <label class="form-check-label text-white" for="flexCheckChecked">
                          Bg-Color
                        </label>
                      </div>
                      <input class="input-color" name="bg" value="#ffffff" type="color" id="bgbgcolor">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <div class="row">
            <div class="col-md-9">
              <div class="row">
                <div id="radio" class="form-check mb-7">
                  <input style="margin-top: 15px; padding: 5px;" class="form-check-input" type="checkbox" value=""
                    id="flexCheckCheckedauto" checked>
                  <label style="margin-top: 10px; margin-right: -15px;" class="form-check-label text-white"
                    for="flexCheckCheckedauto">
                    Auto
                  </label>
                </div>
                <div>
                  <button class="button" id="generate">Generate</button>
                </div>
                <div>
                  <button class="buttonreset" id="reset">Reset</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <textarea name="result" id="result" cols="100" rows="50"></textarea>
      </div>
    </div>
    <script src="{{asset('frontend/javascript/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/javascript/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/javascript/script.js')}}"></script>

</body>
</html>