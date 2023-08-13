<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Tb</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.8.10/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./css/s.css">
</head>
<body class="bg-black">
        <h1 class="text-4xl  font-bold mt-2 text-center w-full h-6 text-purple-900"> HTML Table Generator</h1>
        <form action="" class="bg-slate-800 ml-10 mr-10 mt-10 ">
        <div class=" mt-8 ml-8 mr-8 bg-gray-600 ">
            <div class="p-4 ">
                <section>
                    <div class="container px-5">
                      <h1 class="text-white my-4 text-center">HTML Code Generator</h1>
                      <div class="row">
                        <div class="flex items-center space-x-4 lg:space-x-12">

            <label class=""><h1 class=" ">Rows:
                 <input name="row" value=" 4 " type="text" size=" 2 " maxlength="2" class="w-18">

                </label>
            <label>Columns: 
                 <input name="col"value=" 3 " type="text" size="2" maxlength="2">
                </label>
            <label>Text Color:
                 <input name="textcolor" value="#000000" type="color">
            </label>
            <label>Background:
                 <input name="bg" value="#008000" type="color">
             </label>
            <label>Header Color:
                 <input name="headercolor" value="#FFCC00" type="color">
            </label>
            <label>Padding:
                <input name="padding" value=" 3 " size="2" type="text" maxlength="2">
           <select style="max-width:70px;">
           <optgroup label="Absolute">
           <option value="cm"> Centimeters
           <option value="mm"> Millimeters
           <option value="in"> Inches
           <option value="pt"> Points
           <option value="pc"> Picas
           <option value="px" selected> Pixels
           </optgroup>
           <optgroup label="Font-Relative">
           <option value="em"> Em
           <option value="ex"> Ex
           <option value="ch"> Ch
           <option value="rem"> Rem
           </optgroup>
           <optgroup label="Viewport-Percentage">
           <option value="vw"> Vw
           <option value="vh"> Vh
           <option value="vmin"> Vmin
           <option value="vmax"> Vmax
           </optgroup>
           </select>
           </label>
        </div>
        </div>
            <div class="row">
            <div class="flex items-center space-x-4 lg:space-x-12">
        
          
            <label class="mt-5">
                   Table Width:
                 <input name="tablewidth" value=" 100 " type="text" size="3" maxlength="3" >
            <select name="TableWidthMetric" style="max-width:20px;">
            <optgroup label="Absolute">
            <option value="cm"> Centimeters
            <option value="mm"> Millimeters
            <option value="in"> Inches
            <option value="pt"> Points
            <option value="pc"> Picas
            <option value="px"> Pixels
            </optgroup>
            <optgroup label="Font-Relative">
            <option value="em"> Em
            <option value="ex"> Ex
            <option value="ch"> Ch
            <option value="rem"> Rem
            </optgroup>
            <optgroup label="Viewport-Percentage">
            <option value="vw"> Vw
            <option value="vh"> Vh
            <option value="vmin"> Vmin
            <option value="vmax"> Vmax
            </optgroup>
            <option value="%" selected>Percent
            </select>
            </label>
            <label>Color:
                <input name="bordercolor" value="#FFCC00" type="color" class="mt-5">
            </label>
            <label class="mt-5">Width:
                <input name="borderwidth" value=" 2 " type="text" size="2" maxlength="2">
            <select style="max-width:60px;">
            <optgroup label="Absolute">
            <option value="cm"> Centimeters
            <option value="mm"> Millimeters
            <option value="in"> Inches
            <option value="pt"> Points
            <option value="pc"> Picas
            <option value=" px " selected> Pixels
            </optgroup>
            <optgroup label="Font-Relative">
            <option value="em"> Em
            <option value="ex"> Ex
            <option value="ch"> Ch
            <option value="rem"> Rem
            </optgroup>
            <optgroup label="Viewport-Percentage">
            <option value="vw"> Vw
            <option value="vh"> Vh
            <option value="vmin"> Vmin
            <option value="vmax"> Vmax
            </optgroup>
            </select>
            </label>
            <label class="mt-5">Style:
            <select name="borderstyle">
            <option value="solid" selected> Solid
            <option value="dashed"> Dashed
            <option value="dotted"> Dotted
            <option value="double"> Double
            <option value="groove"> Groove
            <option value="ridge"> Ridge
            <option value="inset"> Inset
            <option value="outset"> Outset
            </select>
            </label>
            <label class="mt-5">Collapse Border:
            <span>
            <input name="collapseborder" type="checkbox" value="collapse" checked style="accent-color: blue;">
            
            </span>
            </label>
        
            </span>
         
            </div>
            <label class="mt-15">Display Text:
                <span>
                <input name="collapseborder" type="checkbox" value="collapse" checked style="accent-color: blue;">
                
                </span>
                </label>
        </div>
            </div>
       
            </div>
        
          
            <div>
            <h2 class="mt-10 ml-4  font-bold text-black text-3xl text-center">The Code</h2>
            <p class=" font-bold mt-2 ml-4 text-center">Here is the code that was generated</p>
            <textarea name="textarea" class=" textarea1 overflow-scroll"></textarea>
            </div>
            </div>
        </form>
    </div>
</div>

</section>
    
            <div class="fixed bottom-0 left-0 bg-black w-screen h-10 p-7 xl text-purple-900 font-bold text-center "><h1 class="text-bold">HTML BULDIFY</h1></div>

</body>
</html>