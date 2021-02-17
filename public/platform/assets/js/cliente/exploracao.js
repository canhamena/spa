var columnDefs = [
    /*{headerName: 'P.A', field: 'pa', filter: 'agTextColumnFilter', chartDataType: 'series', enableRowGroup: true},*/
    //{headerName: '#', field: 'id', chartDataType: 'series', filter: 'agTextColumnFilter', cellRenderer: 'agGroupCellRenderer'},
    {headerName: 'Nome', field: 'nome', filter: 'agTextColumnFilter', chartDataType: 'series', enableRowGroup: true},
    {headerName: 'Género', field: 'genero', filter: 'agSetColumnFilter', chartDataType: 'series', enableRowGroup: true},
    {headerName: 'E-mail', field: 'email', filter: 'agTextColumnFilter', chartDataType: 'series', enableRowGroup: true},
    {headerName: 'Contactos', field: 'telefone', filter: 'agTextColumnFilter', chartDataType: 'series', enableRowGroup: true},
    {headerName: 'Nº. BI', field: 'num_bi', filter: 'agTextColumnFilter', chartDataType: 'series', enableRowGroup: true},
    {headerName: 'Nº. Cliente', field: 'num_cliente', filter: 'agTextColumnFilter', chartDataType: 'category', enableRowGroup: true},

];
/*var autoGroupColumnDef = {
 headerName: 'Referência',
 field: 'referencia',
 cellRenderer: 'agGroupCellRenderer',
 cellRendererParams: {
 checkbox: true
 }
 };*/
var gridOptions = {
    defaultColDef: {
        resizable: true,
        filter: true,
        sortable: true
    },
    statusBar: {
        statusPanels: [
            {statusPanel: 'agTotalAndFilteredRowCountComponent', key: 'totalAndFilter', align: 'left'},
            {statusPanel: 'agSelectedRowCountComponent', align: 'left'},
            {statusPanel: 'agAggregationComponent', align: 'right'}
        ]
    },
    components: {
        numericCellEditor: getNumericCellEditor()
    },
    columnDefs: columnDefs,
    /* masterDetail: true,
     detailCellRendererParams: {
     detailGridOptions: {
     columnDefs: [
     {headerName: 'Valor venda', field: 'valorvenda'},
     {headerName: 'Moeda Venda', field: 'moedavenda'},
     {headerName: 'Valor pago', field: 'valorpago'}

     ],
     onFirstDataRendered: function (params) {
     params.api.sizeColumnsToFit();
     }
     },
     getDetailRowData: function (params) {
     params.successCallback(params.data.negociacao);
     }
     },
     onFirstDataRendered: onFirstDataRendered,*/

    rowSelection: 'multiple',
    alwaysShowVerticalScroll: true,
    enableBrowserTooltips: true,
    rowGroupPanelShow: 'always',
    groupSelectsChildren: true,
    floatingFilter: true,
    rowDeselection: true,
    quickFilterText: null,
    cacheBlockSize: 100,
    maxBlocksInCache: 10,
    enableRangeSelection: true,
    animateRows: true,
    pagination: true,
    //sideBar: true,
    //pivotPanelShow: 'always',
    paginationAutoPageSize: true,
    enableCharts: true,
    onCellEditingStopped: printNode,
    editType: 'fullRow',
    localeText: {
        // for filter panel
        page: 'Página',
        more: 'Mais',
        to: 'a',
        of: 'num total de ',
        next: 'Próximo',
        last: 'Último',
        first: 'Primeiro',
        previous: 'Anterior',
        loadingOoo: 'Carregando...',
        // for set filter
        selectAll: 'Seleccionar tudo',
        searchOoo: 'Procurar...',
        blanks: 'Vazio',
        // for number filter and text filter
        filterOoo: 'Filtrar...',
        applyFilter: 'Aplicar filtro...',
        equals: 'Igual',
        notEqual: 'Não igual',
        // for number filter
        lessThan: 'Menor que',
        greaterThan: 'Maior que',
        lessThanOrEqual: 'Menor ou igual que',
        greaterThanOrEqual: 'Maior or igual que',
        inRange: 'No intervalo',
        // for text filter
        contains: 'Contém',
        notContains: 'Não contém',
        startsWith: 'Começa com',
        endsWith: 'Termina com',
        // filter conditions
        andCondition: 'e',
        orCondition: 'ou',
        // the header of the default group column
        group: 'Grupo',
        // tool panel
        columns: 'Colunas',
        filters: 'Filtros',
        rowGroupColumns: 'laPivot Cols',
        rowGroupColumnsEmptyMessage: 'Arraste colunas para agrupar',
        valueColumns: 'laValue Cols',
        pivotMode: 'Modo pivô',
        groups: 'Grupos',
        values: 'Valores',
        pivots: 'Pivôs',
        valueColumnsEmptyMessage: 'Arraste colunas para agregar',
        pivotColumnsEmptyMessage: 'la drag here to pivot',
        toolPanelButton: 'Botão do painel de ferramentas',
        // other
        noRowsToShow: 'Sem linhas para mostrar',
        enabled: 'Activado',
        // enterprise menu
        pinColumn: 'Afixar coluna',
        valueAggregation: 'Valor de agregação',
        autosizeThiscolumn: 'Tamanho automático',
        autosizeAllColumns: 'Tamanho automático em todos',
        groupBy: 'Agrupar por',
        ungroupBy: 'Desagrupar por',
        resetColumns: 'Redefinir colunas',
        expandAll: 'Expandir todos',
        collapseAll: 'Recolher todos',
        toolPanel: 'Painel de ferramentas',
        export: 'Exportar',
        csvExport: 'Exportar em CSV',
        excelExport: 'Exportar em (.xlsx)',
        excelXmlExport: 'Exportar em (.xml)',
        // enterprise menu (charts)
        pivotChartAndPivotMode: 'laPivot Chart & Pivot Mode',
        pivotChart: 'laPivot Chart',
        chartRange: 'Gráfico',
        columnChart: 'Coluna',
        groupedColumn: 'Agrupada',
        stackedColumn: 'Empilhada',
        normalizedColumn: '100% empilhada',
        barChart: 'Barra',
        groupedBar: 'Agrupada',
        stackedBar: 'Empilhada',
        normalizedBar: '100% empilhada',
        pieChart: 'Pizza',
        pie: 'Pizza',
        doughnut: 'Rosquinha',
        line: 'Linha',
        xyChart: 'XY (Dispersão)',
        scatter: 'Dispersão',
        bubble: 'Bolhas',
        areaChart: 'Área',
        area: 'Área',
        stackedArea: 'Empilhada',
        normalizedArea: '100% empilhada',
        // enterprise menu pinning
        pinLeft: 'à esquerda &lt;&lt;',
        pinRight: 'à direita &gt;&gt;',
        noPin: 'Não afixar &lt;&gt;',
        // enterprise menu aggregation and status bar
        sum: 'Soma',
        min: 'Mínimo',
        max: 'Máximo',
        none: 'Nenhum',
        count: 'Total',
        average: 'Média',
        filteredRows: 'Linhas filtradas',
        selectedRows: 'Linhas seleccionadas',
        totalRows: 'total de linhas',
        totalAndFilteredRows: 'Registos',
        // standard menu
        copy: 'Copiar',
        copyWithHeaders: 'Copiar com cabeçalho',
        ctrlC: 'Ctrl + C',
        paste: 'Colar',
        ctrlV: 'Ctrl + V',
        // charts
        pivotChartTitle: 'laPivot Chart',
        rangeChartTitle: 'Título do gráfico',
        settings: 'Definições',
        data: 'Dados',
        format: 'Formatar',
        categories: 'Colunas',
        series: 'Séries',
        xyValues: 'Valores XY',
        paired: 'Modo emparelhado',
        axis: 'laAxis',
        color: 'Cor',
        thickness: 'Espessura',
        xRotation: 'Rotação em X',
        yRotation: 'Rotação em Y',
        ticks: 'laTicks',
        width: 'Largura',
        length: 'Comprimento',
        padding: 'Preenchimento',
        chart: 'Gráfico',
        title: 'Título',
        background: 'Fundo',
        font: 'Fonte',
        top: 'Cima',
        right: 'Direita',
        bottom: 'Baixo',
        left: 'Esquerda',
        labels: 'Rótulo',
        size: 'Tamanho',
        minSize: 'Tamanho mínimo',
        maxSize: 'Tamanho máximo',
        legend: 'Legenda',
        position: 'Posição',
        markerSize: 'laMarker Size',
        markerStroke: 'laMarker Stroke',
        markerPadding: 'laMarker Padding',
        itemPaddingX: 'Preenchimento do item em X',
        itemPaddingY: 'Preenchimento do item em Y',
        strokeWidth: 'laStroke Width',
        offset: 'Deslocamento',
        offsets: 'Deslocamentos',
        tooltips: 'laTooltips',
        callout: 'laCallout',
        markers: 'Marcadores',
        shadow: 'Sombra',
        blur: 'laBlur',
        xOffset: 'Deslocamento em X',
        yOffset: 'Deslocamento em Y',
        lineWidth: 'Espessura da linha',
        normal: 'Normal',
        bold: 'Negrito',
        italic: 'Itálico',
        boldItalic: 'Negrito Itálico',
        predefined: 'Pré-definido',
        fillOpacity: 'Opacidade de preenchimento',
        strokeOpacity: 'Opacidade da linha',
        columnGroup: 'Coluna',
        barGroup: 'Barra',
        pieGroup: 'Pizza',
        lineGroup: 'Linha',
        scatterGroup: 'Dispersão',
        areaGroup: 'Área',
        groupedColumnTooltip: 'laGrouped',
        stackedColumnTooltip: 'laStacked',
        normalizedColumnTooltip: 'la100% Stacked',
        groupedBarTooltip: 'laGrouped',
        stackedBarTooltip: 'laStacked',
        normalizedBarTooltip: 'la100% Stacked',
        pieTooltip: 'laPie',
        doughnutTooltip: 'laDoughnut',
        lineTooltip: 'laLine',
        groupedAreaTooltip: 'laGrouped',
        stackedAreaTooltip: 'laStacked',
        normalizedAreaTooltip: 'la100% Stacked',
        scatterTooltip: 'laScatter',
        bubbleTooltip: 'laBubble',
        noDataToChart: 'Não existem dados disponíveis para serem apresentados no gráfico.',
        pivotChartRequiresPivotMode: 'O Gráfico dinâmico requer o Modo pivô activado.'
    }
};







document.addEventListener('DOMContentLoaded', function () {
    var gridDiv = document.querySelector('#myGrid');
    new agGrid.Grid(gridDiv, gridOptions);

    //var caminho = ""+{{ route('cliente.exploracaoAjax') }} +"";
    agGrid.simpleHttpRequest({url: "exploracaoAjax"}).then(function (data) {
        gridOptions.api.setRowData(data);
        gridOptions.api.sizeColumnsToFit();
    });
});


/*var eGridDiv = document.querySelector('#myGrid');
 new agGrid.Grid(eGridDiv, gridOptions);
 agGrid.simpleHttpRequest({
 //url deve ser o caminho que retorna os dados no formato json
 url: '/Muxima_Imoveis/Exploracao/geralAjax'
 })

 .then(function (data) {
 gridOptions.api.setRowData(data);
 });*/
//function getSelectedRows() {
// var selectedNodes = gridOptions.api.getSelectedNodes();
// var selectedData = selectedNodes.map(node => node.data);
// var selectedDataStringPresentation = selectedData.map(node => node.nome + ' ' + node.tipo).join(', ');
//}

function onFirstDataRendered(params) {
    params.api.sizeColumnsToFit();
    setTimeout(function () {
        params.api.getDisplayedRowAtIndex(1).setExpanded(true);
    }, 0);
}

function onPageSizeChanged(newPageSize) {
    var value = document.getElementById('page-size').value;
    gridOptions.api.paginationSetPageSize(Number(value));
}


function printNode(node, index) {
//Id do objecto
    var id = node.data.id;
    var cliente = node.data.nome;
    var num_factura = node.data.numfactura;
    console.log('Texto: ' + node.data.nome + ' -> ' + node.data.id);
    $.ajax
            ({
                type: 'POST',
                url: '/Publijobs/Actividade/actualizarAjax',
                dataType: 'text',
                data: {
                    cod_actividade: id,
                    cliente: cliente,
                    num_fatura: num_factura
                },
                cache: false,
                success: function (data) {
                    if (data.codigo == 200) {
                        gridOptions.api.stopEditing();
                    }
                },
                error: function (xhr, status, error) {
                    alert(error);
                },
                complete: function () {
                }
            });
}




function getNumericCellEditor() {
    function isCharNumeric(charStr) {
        return !!/\d/.test(charStr);
    }

    function isKeyPressedNumeric(event) {
        var charCode = getCharCodeFromEvent(event);
        var charStr = String.fromCharCode(charCode);
        return isCharNumeric(charStr);
    }

    function getCharCodeFromEvent(event) {
        event = event || window.event;
        return typeof event.which === 'undefined' ? event.keyCode : event.which;
    }


    function NumericCellEditor() {
    }

// gets called once before the renderer is used
    NumericCellEditor.prototype.init = function (params) {
// we only want to highlight this cell if it started the edit, it is possible
// another cell in this row started teh edit
        this.focusAfterAttached = params.cellStartedEdit;
        // create the cell
        this.eInput = document.createElement('input');
        this.eInput.style.width = '100%';
        this.eInput.style.height = '100%';
        this.eInput.value = isCharNumeric(params.charPress) ? params.charPress : params.value;
        var that = this;
        this.eInput.addEventListener('keypress', function (event) {
            if (!isKeyPressedNumeric(event)) {
                that.eInput.focus();
                if (event.preventDefault)
                    event.preventDefault();
            }
        });
    };
    // gets called once when grid ready to insert the element
    NumericCellEditor.prototype.getGui = function () {
        return this.eInput;
    };
    // focus and select can be done after the gui is attached
    NumericCellEditor.prototype.afterGuiAttached = function () {
        // only focus after attached if this cell started the edit
        if (this.focusAfterAttached) {
            this.eInput.focus();
            this.eInput.select();
        }
    };
    // returns the new value after editing
    NumericCellEditor.prototype.isCancelBeforeStart = function () {
        return this.cancelBeforeStart;
    };
    // example - will reject the number if it contains the value 007
    // - not very practical, but demonstrates the method.
    NumericCellEditor.prototype.isCancelAfterEnd = function () {
    };
    // returns the new value after editing
    NumericCellEditor.prototype.getValue = function () {
        return this.eInput.value;
    };
    // when we tab onto this editor, we want to focus the contents
    NumericCellEditor.prototype.focusIn = function () {
        var eInput = this.getGui();
        eInput.focus();
        eInput.select();
        console.log('NumericCellEditor.focusIn()');
    };
    // when we tab out of the editor, this gets called
    NumericCellEditor.prototype.focusOut = function () {
        // but we don't care, we just want to print it for demo purposes
        console.log('NumericCellEditor.focusOut()');
    };
    return NumericCellEditor;
}


function currencyFormatter(params) {
    return '' + formatNumber(params.value);
}


function formatNumber(num) {
    var fixed = 2;
    var decimalPart;

    var array = Math.floor(num).toString().split('');
    var index = -3;
    while (array.length + index > 0) {
        array.splice(index, 0, '.');
        index -= 4;
    }

    if (fixed > 0) {
        decimalPart = num.toFixed(fixed).split(".")[1];
        return array.join('') + "," + decimalPart;
    }
    return array.join('');
}





function numberParser(params) {
    var newValue = params.newValue;
    var valueAsNumber;
    if (newValue === null || newValue === undefined || newValue === '') {
        valueAsNumber = null;
    } else {
        valueAsNumber = parseFloat(params.newValue);
    }
    return valueAsNumber;
}




