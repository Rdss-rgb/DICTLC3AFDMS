<?php

include('security.php');
include("docx_metadata.php");
include('includes/header.php');
include('includes/navbar.php');

?>
  <div class="wrapper row3">
    <main class="hoc container clear">
      <!-- main body -->
      <div class="sidebar one_quarter first">
        <nav class="sdb_holder">
          <ul>
            <li class="active"><a href="demos.html">Demos - Main</a></li>
            <ul>
              <li><a href="#" id="demo_1" class="demos" data-file="Letter.docx">Demo1 - docx</a></li>
              <li><a href="#" id="demo_2" class="demos" data-file="demo.pptx">Demo2 - pptx</a></li>
              <li><a href="#" id="demo_3" class="demos" data-file="Closing Stock Prices.xlsx">Demo3 - xlsx</a></li>
              <li><a href="#" id="demo_4" class="demos" data-file="demo.pdf">Demo4 - pdf</a></li>
              <li><a href="#" id="demo_5" class="demos" data-file="demo.jpg">Demo4 - image</a></li>
              <li><a href="#" id="demo_input" class="demos" data-file="">Demo5 - Input</a></li>
            </ul>
          </ul>
        </nav>
      </div>
      <!-- ################################################################################################ -->
      <div class="content three_quarter">
        <div class="box bg-light clear">
          <h3 class="font-x2" id="head-name">Demos - Main</h3>
          <p id="file_p" style="display:none;">File: <a href="#" id="a_file"></a><input type="file" id="select_file" />
          </p>
          <div id="description">
            <p>&lt;-- Select one of demos on left side</p>
          </div>
        </div>
        <p id="resolte-text" style="display:none">Resolte:</p>
        <!--<div id="resolte-contaniner" style="display:none;"></div>-->
        <div style="overflow: hidden;width: 800px; ">
          <div id="resolte-contaniner" style="width: 100%; height:550px; overflow: auto;"></div>
        </div>
        <script>
          (function ($) {
            $(".demos").on("click", function (e) {
              e.preventDefault();

              $(".sdb_holder li").removeClass("active");
              $(this).parent().addClass("active");
              var id = $(this).attr("id");
              $("#head-name").html($(this).html());
              $("#description").hide();
              $("#resolte-contaniner").html("");
              $("#resolte-contaniner").show();
              $("#resolte-text").show();
              if (id != "demo_input") {

                $("#select_file").hide();
                var file_path = "files\\" + $(this).data("file");
                $("#a_file").html($(this).data("file")).attr("href", file_path);
                $("#a_file").show();
                $("#file_p").show();

                $("#resolte-contaniner").officeToHtml({
                  url: file_path,
                  pdfSetting: {
                    setLang: "",
                    setLangFilesPath: "" /*"include/pdf/lang/locale" - relative to app path*/
                  }
                });
              } else {

                $("#select_file").show();
                $("#file_p").show();
                $("#a_file").hide();

                $("#resolte-contaniner").officeToHtml({
                  inputObjId: "select_file",
                  pdfSetting: {
                    setLang: "",
                    setLangFilesPath: "" /*"include/pdf/lang/locale" - relative to app path*/
                  }
                });
              }
            });
          }(jQuery));
        </script>
      </div>
  </div>
  <!-- / main body -->
  <div class="clear"></div>
  </main>
  </div>

  <div class="wrapper row5">
    <div id="copyright" class="hoc clear">
      <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="https://github.com/meshesha/">Tady
          Meshesha</a></p>
      <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/"
          title="Free Website Templates">OS Templates</a></p>
    </div>
  </div>
  <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
</body>

</html>