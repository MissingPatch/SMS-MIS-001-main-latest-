<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
    <script>
      let sidebar = document.querySelector(".sidebar");
      let closeBtn = document.querySelector("#btn");
      let searchBtn = document.querySelector(".bx-search");
      let arrow = document.querySelectorAll(".arrow");

      closeBtn.addEventListener("click", () => {
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
      });

      searchBtn.addEventListener("click", () => {
        // Sidebar open when you click on the search icon
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
      });

      // following are the code to change sidebar button(optional)
      function menuBtnChange() {
        if (sidebar.classList.contains("open")) {
          closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the icons class
        } else {
          closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the icons class
        }
      }

      for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e) => {
          let arrowParent = e.currentTarget.parentNode;
          console.log(arrowParent);
          arrowParent.classList.toggle("showMenu");
        });
      }

      let sidebarBtn = document.querySelector(".bx-menu");
      console.log(sidebarBtn);
      sidebarBtn.addEventListener("click", () => {
        sidebar.classList.toggle("close");
      });


      
    </script>
<script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="assets/demo/chart-pie-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/bundle.js" crossorigin="anonymous"></script>
    <script src="js/litepicker.js"></script>

<!-- SCRIPT FOR MODAL -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <!-- SCRIPT FOR MODAL -->
    <script>
        $(document).ready(function () {

            $('.viewbtn').on('click', function () {
                $('#viewmodal').modal('show');
                $.ajax({ //create an ajax request to display.php
                    type: "GET",
                    url: "display.php",
                    dataType: "html", //expect html to be returned                
                    success: function (response) {
                        $("#responsecontainer").html(response);
                        //alert(response);
                    }
                });
            });

        });
    </script>


    <script>
        $(document).ready(function () {

            $('#datatableid').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search Your Data",
                }
            });

        });
    </script>

    <script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_id').val(data[0]);

            });
        });
    </script>

    <script>
        $(document).ready(function () {

            $('.editbtn').on('click', function () {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#update_id').val(data[0]);
                $('#fname').val(data[1]);
                $('#lname').val(data[2]);
                $('#course').val(data[3]);
                $('#contact').val(data[4]);
            });
        });
    </script>

			<!-- PASSWORD -->
			<script
              src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
              integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
              crossorigin="anonymous"
            ></script>
            <script>
              let showPassword = document.querySelector("#passwordIconId");
              const passwordField = document.querySelector("#password1");

              showPassword.addEventListener("click", function () {
                this.classList.toggle("fa-eye");

                const type =
                  passwordField.getAttribute("type") === "password"
                    ? "text"
                    : "password";
                passwordField.setAttribute("type", type);
              });
            </script>





<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    


<script>
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>


    <!-- CHART DASHBOARD -->

<script>
      window.Promise ||
        document.write(
          '<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.min.js"><\/script>'
        )
      window.Promise ||
        document.write(
          '<script src="https://cdn.jsdelivr.net/npm/eligrey-classlist-js-polyfill@1.2.20171210/classList.min.js"><\/script>'
        )
      window.Promise ||
        document.write(
          '<script src="https://cdn.jsdelivr.net/npm/findindex_polyfill_mdn"><\/script>'
        )
    </script>

    
    <script src="https://cdn.jsdelivr.net/npm/react@16.12/umd/react.production.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/react-dom@16.12/umd/react-dom.production.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prop-types@15.7.2/prop-types.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.34/browser.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.jsdelivr.net/npm/react-apexcharts@1.3.6/dist/react-apexcharts.iife.min.js"></script>
    

    <script>
      // Replace Math.random() with a pseudo-random number generator to get reproducible results in e2e tests
      // Based on https://gist.github.com/blixt/f17b47c62508be59987b
      var _seed = 42;
      Math.random = function() {
        _seed = _seed * 16807 % 2147483647;
        return (_seed - 1) / 2147483646;
      };
    </script>


<script>
  // LOADER
		function returnCommentSymbol(language = "javascript") {
			const languageObject = {
				bat: "@REM",
				c: "//",
				csharp: "//",
				cpp: "//",
				closure: ";;",
				coffeescript: "#",
				dockercompose: "#",
				css: "/*DELIMITER*/",
				"cuda-cpp": "//",
				dart: "//",
				diff: "#",
				dockerfile: "#",
				fsharp: "//",
				"git-commit": "//",
				"git-rebase": "#",
				go: "//",
				groovy: "//",
				handlebars: "{{!--DELIMITER--}}",
				hlsl: "//",
				html: "<!--DELIMITER-->",
				ignore: "#",
				ini: ";",
				java: "//",
				javascript: "//",
				javascriptreact: "//",
				json: "//",
				jsonc: "//",
				julia: "#",
				latex: "%",
				less: "//",
				lua: "--",
				makefile: "#",
				markdown: "<!--DELIMITER-->",
				"objective-c": "//",
				"objective-cpp": "//",
				perl: "#",
				perl6: "#",
				php: "<!--DELIMITER-->",
				powershell: "#",
				properties: ";",
				jade: "//-",
				python: "#",
				r: "#",
				razor: "<!--DELIMITER-->",
				restructuredtext: "..",
				ruby: "#",
				rust: "//",
				scss: "//",
				shaderlab: "//",
				shellscript: "#",
				sql: "--",
				svg: "<!--DELIMITER-->",
				swift: "//",
				tex: "%",
				typescript: "//",
				typescriptreact: "//",
				vb: "'",
				xml: "<!--DELIMITER-->",
				xsl: "<!--DELIMITER-->",
				yaml: "#"
			}
			return languageObject[language].split("DELIMITER")
		}
		var savedChPos = 0
		var returnedSuggestion = ''
		let editor, doc, cursor, line, pos
		pos = {line: 0, ch: 0}
		var suggestionsStatus = false
		var docLang = "python"
		var suggestionDisplayed = false
		var isReturningSuggestion = false
		document.addEventListener("keydown", (event) => {
		setTimeout(()=>{
			editor = event.target.closest('.CodeMirror');
			if (editor){
				const codeEditor = editor.CodeMirror
				if(!editor.classList.contains("added-tab-function")){
					editor.classList.add("added-tab-function")
					codeEditor.removeKeyMap("Tab")
					codeEditor.setOption("extraKeys", {Tab: (cm)=>{

						if(returnedSuggestion){
							acceptTab(returnedSuggestion)
						}
						else{
							cm.execCommand("defaultTab")
						}
					}})
				}
				doc = editor.CodeMirror.getDoc()
				cursor = doc.getCursor()
				line = doc.getLine(cursor.line)
				pos = {line: cursor.line, ch: line.length}

				if(cursor.ch > 0){
					savedChPos = cursor.ch
				}

				const fileLang = doc.getMode().name
				docLang = fileLang
				const commentSymbol = returnCommentSymbol(fileLang)
				if (event.key == "?"){
					var lastLine = line
					lastLine = lastLine.slice(0, savedChPos - 1)

					if(lastLine.trim().startsWith(commentSymbol[0])){
						lastLine += " "+fileLang
						lastLine = lastLine.split(commentSymbol[0])[1]
						window.postMessage({source: 'getQuery', payload: { data: lastLine } } )
						isReturningSuggestion = true
						displayGrey("\nBlackbox loading...")
					}
				}else if(event.key === "Enter" && suggestionsStatus && !isReturningSuggestion){
					var query = doc.getRange({ line: Math.max(0,cursor.line-10), ch: 0 }, { line: cursor.line, ch: line.length })
					window.postMessage({source: 'getSuggestion', payload: { data: query, language: docLang } } )
					displayGrey("Blackbox loading...")
				}else if(event.key === "ArrowRight" && returnedSuggestion){
					acceptTab(returnedSuggestion)
				}else if(event.key === "Enter" && isReturningSuggestion){
					displayGrey("\nBlackbox loading...")
				}else if(event.key === "Escape"){
					displayGrey("")
				}
			}
		}, 0)
		})

		function acceptTab(text){
		if (suggestionDisplayed){
			displayGrey("")
			doc.replaceRange(text, pos)
			returnedSuggestion = ""
			updateSuggestionStatus(false)
		}
		}
		function acceptSuggestion(text){
			displayGrey("")
			doc.replaceRange(text, pos)
			returnedSuggestion = ""
			updateSuggestionStatus(false)
		}
		function displayGrey(text){
			if(!text){
				document.querySelector(".blackbox-suggestion").remove()
				return
			}
			var el = document.querySelector(".blackbox-suggestion")
			if(!el){
				el = document.createElement('span')
				el.classList.add("blackbox-suggestion")
				el.style = 'color:grey'
				el.innerText = text
			}
			else{
				el.innerText = text
			}
			
			var lineIndex = pos.line;
			editor.getElementsByClassName('CodeMirror-line')[lineIndex].appendChild(el)
		}
		function updateSuggestionStatus(s){
			suggestionDisplayed = s
			window.postMessage({source: 'updateSuggestionStatus', status: suggestionDisplayed, suggestion: returnedSuggestion})
		}
		window.addEventListener('message', (event)=>{
		if (event.source !== window ) return
		if (event.data.source == 'return'){
			isReturningSuggestion = false
			const formattedCode = formatCode(event.data.payload.data)
			returnedSuggestion = formattedCode
			displayGrey(formattedCode)
			updateSuggestionStatus(true)
		}
		if(event.data.source == 'suggestReturn'){
			returnedSuggestion = event.data.payload.data
			displayGrey(event.data.payload.data)
			updateSuggestionStatus(true)
		}
		if(event.data.source == 'suggestionsStatus'){
			suggestionsStatus = event.data.payload.enabled
		}
		if(event.data.source == 'acceptSuggestion'){
			
			acceptSuggestion(event.data.suggestion)
		}
		})
		document.addEventListener("keyup", function(){
			returnedSuggestion = ""
			updateSuggestionStatus(false)
		})
		function formatCode(data) {
			if (Array.isArray(data)) {
				var finalCode = ""
				var pairs = []
		
				const commentSymbol = returnCommentSymbol(docLang)
				data.forEach((codeArr, idx) => {
					const code = codeArr[0]
					var desc = codeArr[1]
					const descArr = desc.split("\n")
					var finalDesc = ""
					descArr.forEach((descLine, idx) => {
						const whiteSpace = descLine.search(/\S/)
						if (commentSymbol.length < 2 || idx === 0) {
							finalDesc += insert(descLine, whiteSpace, commentSymbol[0])
						}
						if (commentSymbol.length > 1 && idx === descArr.length - 1) {
							finalDesc = finalDesc + commentSymbol[1] + "\n"
						}
					})
		
					finalCode += finalDesc + "\n\n" + code
					pairs.push(finalCode)
				})
				return "\n"+pairs.join("\n")
			}
		
			return "\n"+data
		}
		
		function insert(str, index, value) {
			return str.substr(0, index) + value + str.substr(index)
		}
	</script>



    <!-- PASSWORD EYE -->
<script>
const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>



    <!-- TIME SCRIPT -->
<script>
      function updateTime() {
         // get the current date and time
         var now = new Date();

         // get the formatted date and time string with AM/PM indicator
         var options = { hour12: true, hour: 'numeric', minute: 'numeric', second: 'numeric' };
         var dateTimeString = now.toLocaleTimeString([], options);

         // update the date and time element on the page
         document.getElementById('dateTime').innerHTML = dateTimeString;
      }

      // call the updateTime() function every second
      setInterval(updateTime, 1000);
   </script>

