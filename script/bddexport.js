function exportListingExcel(idTable, nameFile) {
    var table = document.getElementById(idTable);
    var keyNextCase = ";";
    var rows =[];
    for(var i=0,row; row = table.rows[i];i++){
        column1 = row.cells[0].innerText.replace('é', 'e').replace('<br>', ' ').replace('\n', ' ').replace('É', 'E').replace('N°', 'Numero de contrat').replace('à', 'a');
        column2 = row.cells[1].innerText.replace('é', 'e').replace('<br>', ' ').replace('\n', ' ').replace('É', 'E').replace('N°', 'Numero de contrat').replace('à', 'a');
        column3 = row.cells[2].innerText.replace('é', 'e').replace('<br>', ' ').replace('\n', ' ').replace('É', 'E').replace('N°', 'Numero de contrat').replace('à', 'a');
        column4 = row.cells[3].innerText.replace('é', 'e').replace('<br>', ' ').replace('\n', ' ').replace('É', 'E').replace('N°', 'Numero de contrat').replace('à', 'a');
        column5 = row.cells[4].innerText.replace('é', 'e').replace('<br>', ' ').replace('\n', ' ').replace('É', 'E').replace('N°', 'Numero de contrat').replace('à', 'a');
       
        column1 = column1.replace('é', 'e').replace('<br>', ' ').replace('\n', ' ').replace('É', 'E').replace('N°', 'Numero de contrat').replace('à', 'a');
        column2 = column2.replace('é', 'e').replace('<br>', ' ').replace('\n', ' ').replace('É', 'E').replace('N°', 'Numero de contrat').replace('à', 'a');
        column3 = column3.replace('é', 'e').replace('<br>', ' ').replace('\n', ' ').replace('É', 'E').replace('N°', 'Numero de contrat').replace('à', 'a');
        column4 = column4.replace('é', 'e').replace('<br>', ' ').replace('\n', ' ').replace('É', 'E').replace('N°', 'Numero de contrat').replace('à', 'a');
        column5 = column5.replace('é', 'e').replace('<br>', ' ').replace('\n', ' ').replace('É', 'E').replace('N°', 'Numero de contrat').replace('à', 'a');
      
        rows.push(
            [
                column1,
                column2,
                column3,
                column4,
                column5,

            ]
        );
    }
    csvContent = "data:text/csv;charset=utf-8,";
    rows.forEach(function(rowArray){
        row = rowArray.join(keyNextCase);
        csvContent += row.replace('é', 'e') + "\r\n";
    });
    var encodedUri = encodeURI(csvContent);
    var link = document.createElement("a");
    link.setAttribute("href", encodedUri);
    link.setAttribute("download", nameFile + ".csv");
    document.body.appendChild(link);
    link.click();
}