<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- CSS Code: Place this code in the document's head (between the 'head' tags) -->
    <style>

      table.GeneratedTable {
        width: 100%;
        background-color: #ffffff;
        border-collapse: collapse;
        border-width: 2px;
        border-color: #ffcc00;
        border-style: solid;
        color: #000000;
      }

      table.GeneratedTable td,
      table.GeneratedTable th {
        border-width: 2px;
        border-color: #ffcc00;
        border-style: solid;
        padding: 3px;
      }

      table.GeneratedTable thead {
        background-color: #ffcc00;
      }
    </style>
  </head>

  <body>
    <form>
      <div style="font-size: 14px; background: #f6f6f6; padding: 5px">
        <label>Rows: </label
        ><input
          type="text"
          style="width: 2.6vw"
          id="readRow"
          onchange="buildTable()"
        />
        <label>Columns: </label
        ><input
          type="text"
          style="width: 2.6vw"
          id="readCol"
          onchange="buildTable()"
        />
        <label>Text Colour: </label
        ><input type="color" onchange="onChangeFontColor(event)" />
        <label>Background: </label
        ><input
          type="color"
          onchange="onChangeRowColour(event)"
          value="#FFFFFF"
        />
        <label>Header Color: </label
        ><input
          type="color"
          onchange="onChangeHeaderColour(event)"
          value="#ffcc00"
        />
        <label>Padding : </label
        ><input
          type="text"
          style="width: 2.6vw"
          id="readPaddingValue"
          onchange="onChangePadding()"
        />
        <select
          name="readPaddingUnit"
          id="readPaddingUnit"
          onchange="onChangePadding()"
        >
          <optgroup label="Absolute">
            <option value="cm">Centimeters</option>
            <option value="mm">Millimeters</option>
            <option value="in">Inches</option>
            <option value="pt">Points</option>
            <option value="pc">Picas</option>
            <option value="px" selected="">Pixels</option>
          </optgroup>
          <optgroup label="Font-Relative">
            <option value="em">Em</option>
            <option value="ex">Ex</option>
            <option value="ch">Ch</option>
            <option value="rem">Rem</option>
          </optgroup>
          <optgroup label="Viewport-Percentage">
            <option value="vw">Vw</option>
            <option value="vh">Vh</option>
            <option value="vmin">Vmin</option>
            <option value="vmax">Vmax</option>
          </optgroup>
        </select>
        <label>Table Width: </label
        ><input
          type="text"
          style="width: 2.6vw"
          onchange="onChangeTableWidth()"
          id="tableWidthValue"
        />
        <select
          name="tableWidthUnit"
          id="tableWidthUnit"
          onchange="onChangeTableWidth()"
        >
          <optgroup label="Absolute">
            <option value="cm">Centimeters</option>
            <option value="mm">Millimeters</option>
            <option value="in">Inches</option>
            <option value="pt">Points</option>
            <option value="pc">Picas</option>
            <option value="px" selected="">Pixels</option>
          </optgroup>
          <optgroup label="Font-Relative">
            <option value="em">Em</option>
            <option value="ex">Ex</option>
            <option value="ch">Ch</option>
            <option value="rem">Rem</option>
          </optgroup>
          <optgroup label="Viewport-Percentage">
            <option value="vw">Vw</option>
            <option value="vh">Vh</option>
            <option value="vmin">Vmin</option>
            <option value="vmax">Vmax</option>
          </optgroup>
        </select>
        <label>Border Colour: </label
        ><input
          type="color"
          value="#ffcc00"
          id="borderColor"
          onchange="onChangeBorderColor(event)"
        />
        <label>Width: </label
        ><input
          type="text"
          style="width: 2.6vw"
          id="tableBorderWidthValue"
          onchange="onChangeBorderWidth()"
        /><select
          name="tableBorderWidthUnit"
          id="tableBorderWidthUnit"
          onchange="onChangeBorderWidth()"
        >
          <optgroup label="Absolute">
            <option value="cm">Centimeters</option>
            <option value="mm">Millimeters</option>
            <option value="in">Inches</option>
            <option value="pt">Points</option>
            <option value="pc">Picas</option>
            <option value="px" selected="">Pixels</option>
          </optgroup>
          <optgroup label="Font-Relative">
            <option value="em">Em</option>
            <option value="ex">Ex</option>
            <option value="ch">Ch</option>
            <option value="rem">Rem</option>
          </optgroup>
        </select>
        <label>Style: </label
        ><select
          name="tableBorderWidthStyle"
          id="tableBorderWidthStyle"
          onchange="onChangeBorderWidth()"
        >
          <option value="solid" selected="">Solid</option>
          <option value="dashed">Dashed</option>
          <option value="dotted">Dotted</option>
          <option value="double">Double</option>
          <option value="groove">Groove</option>
          <option value="ridge">Ridge</option>
          <option value="inset">Inset</option>
          <option value="outset">Outset</option>
        </select>
        <label>Collapse Border: </label
        ><input
          type="checkbox"
          onchange="onChangeBorderWidth()"
          id="tableBorderCollapse"
        />
        <label>Rowspan: </label>
        <input type="text" style="width: 2.6vw">

        <label>Colspan: </label>
        <input type="text" style="width: 2.6vw">
      </div>
    </form>

    <!-- HTML Code: Place this code in the document's body (between the 'body' tags) where the table should appear -->
    <br><table class="GeneratedTable" id="mytable" style="border: 1px solid">
      <thead>
        <tr id="header">
          <th>Header</th>
          <th>Header</th>
          <th>Header</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
      </tbody>
    </table>

    <textarea
      name="code"
      id="code"
      style="width: 750px; height: 400px;"
    ></textarea>

    <!-- Codes by Quackit.com -->
  </body>
  <script>
    function onChangeHeaderColour(event) {
      document.getElementById("header").style.backgroundColor =
        event.target.value;
      myCode();
    }
    function onChangeRowColour(event) {
      var x = [...document.getElementsByTagName("td")].forEach(
        (td) => (td.style.backgroundColor = event.target.value)
      );
      myCode();
      // x[0].style.backgroundColor = event.target.value;

      // document.getElementsByClassName("GeneratedTable").style.backgroundColor =
      //   event.target.value;
    }
    function onChangeFontColor(event) {
      document.getElementById("mytable").style.color = event.target.value;
      myCode();
    }
    function onChangeBorderColor(event) {
      [...document.getElementsByTagName("td")].forEach(
        (td) => (td.style.borderColor = event.target.value)
      );
      [...document.getElementsByTagName("th")].forEach(
        (td) => (td.style.borderColor = event.target.value)
      );
      myCode();
    }

    function onChangeTableWidth() {
      // [...document.getElementsByTagName("td")].forEach(
      //   (td) => (td.style.width = value + "px")
      // );
      // [...document.getElementsByTagName("th")].forEach(
      //   (td) => (td.style.width = value + "px")
      // );
      var myTable = document.getElementById("mytable");
      var unit = document.getElementById("tableWidthUnit").value;
      var value = document.getElementById("tableWidthValue").value;
      myTable.style.width = value + unit;
      myCode();
    }

    function onChangeBorderWidth(event) {
      var value = document.getElementById("tableBorderWidthValue").value;
      var unit = document.getElementById("tableBorderWidthUnit").value;
      var style = document.getElementById("tableBorderWidthStyle").value;
      var collapse = document.getElementById("tableBorderCollapse").checked;
      var collapseValue = "";
      if (collapse) {
        collapseValue = "collapse";
      } else {
        collapseValue = "separate";
      }

      document.getElementById("mytable").style.borderCollapse = collapseValue;
      [...document.getElementsByTagName("td")].forEach((td) => {
        td.style.borderWidth = value + unit;
        td.style.borderStyle = style;
      });
      [...document.getElementsByTagName("th")].forEach((td) => {
        td.style.borderWidth = value + unit;
        td.style.borderStyle = style;
      });
      myCode();
    }

    function buildTable() {
      var myTable = document.getElementById("mytable");
      myTable.innerHTML = "";
      var j = document.getElementById("readRow").value || 3;
      var k = document.getElementById("readCol").value || 3;
      var rows = [];
      var cells = [];
      var borderColor = document.getElementById("borderColor").value;
      var myHtml = '<tr id="header">';
      for (var i = 0; i < k; i++) {
        myHtml += "<th>Header</th>";
      }
      myHtml += "</tr>";

      for (var i = 0; i < j; i++) {
        myHtml += "<tr>";
        for (var x = 0; x < k; x++) {
          myHtml += "<td>Cell</td>";
        }
        myHtml += "</tr>";
      }
      myTable.innerHTML = myHtml;

      document.getElementById("header").style.backgroundColor = borderColor;
      myCode();
    }

    function onChangePadding() {
      var value = document.getElementById("readPaddingValue").value || 0;
      var unit = document.getElementById("readPaddingUnit").value || px;
      [...document.getElementsByTagName("td")].forEach((td) => {
        td.style.padding = value + unit;
      });
      [...document.getElementsByTagName("th")].forEach((td) => {
        td.style.padding = value + unit;
      });
      myCode();
    }
    // console.log(document.getElementById("mytable").innerHTML);
    function myCode() {
      document.getElementById("code").textContent =
        document.getElementById("mytable").innerHTML;
    }
    myCode();
    // console.log(document.getElementById("mytable").innerHTML);
  </script>
</html>
