let stackedChart = echarts.init(document.getElementById('stacked-line'));
let option = {

    grid: {
        left: '1%',
        right: '2%',
        bottom: '3%',
        containLabel: true
    },
    tooltip: {
        trigger: 'axis'
    },
    // Add legend
    legend: {
        data: ['Registros', 'Llamadas', 'Cobrados']
    },

    // Add custom colors
    color: ['#47d182', '#211a19', '#ff6f61', '#ffd800'],

    // Enable drag recalculate
    calculable: true,

    // Hirozontal axis
    xAxis: [{
        type: 'category',
        boundaryGap: false,
        data: [
            'Día 1', 'Día 2', 'Día 3', 'Día 4', 'Día 5', 'Día 6', 'Día 7'
        ]
    }],

    // Vertical axis
    yAxis: [{
        type: 'value'
    }],

    // Add series
    series: [{
            name: 'Registros',
            type: 'line',
            stack: 'Total',
            data: [125, 254, 125, 105, 75, 235, 215]
        },
        {
            name: 'Llamadas',
            type: 'line',
            stack: 'Total',
            data: [245, 495, 201, 245, 215, 345, 301]
        },
        {
            name: 'Cobrados',
            type: 'line',
            stack: 'Total',
            data: [125, 545, 320, 158, 215, 325, 412]
        }
    ],
    lineStyle: {
        width: 10
    }
    // Add series

};
stackedChart.setOption(option);

let basicdoughnutChart = echarts.init(document.getElementById('basic-doughnut'));
let options = {
    // Add title
    title: {
        text: 'Concentrado de pólizas',
        subtext: 'Emisiones / Cobro',
        x: ''
    },

    // Add legend
    legend: {
        orient: 'vertical',
        x: 'right',
        top: '40%',
        data: ['Emitidas', 'Cobradas'],
        right: 0
    },



    // Add custom colors
    color: ['#f36f63', '#555'],

    // Display toolbox
    toolbox: {
        show: true,
        orient: 'vertical',
        feature: {
            mark: {
                show: true,
                title: {
                    mark: 'Markline switch',
                    markUndo: 'Undo markline',
                    markClear: 'Clear markline'
                }
            },
            dataView: {
                show: false,
                readOnly: false,
                title: 'View data',
                lang: ['View chart data', 'Close', 'Update']
            },
            magicType: {
                show: true,
                title: {
                    pie: 'Switch to pies',
                    funnel: 'Switch to funnel',
                },
                type: ['pie', 'funnel'],
                option: {
                    funnel: {
                        x: '25%',
                        y: '20%',
                        width: '50%',
                        height: '70%',
                        funnelAlign: 'left',
                        max: 1548
                    }
                }
            },
            restore: {
                show: false,
                title: 'Restore'
            },
            saveAsImage: {
                show: false,
                title: 'Same as image',
                lang: ['Save']
            }
        }
    },

    // Enable drag recalculate
    calculable: true,

    // Add series
    series: [{
        name: 'Pólizas',
        type: 'pie',
        center: ['30%', '50%'],
        radius: ['35%', '70%'],
        // center: ['50%', '57.5%'],
        itemStyle: {
            normal: {
                label: {
                    show: true,
                    position: 'inner',
                    formatter: function(params) {
                        return params.value + '%\n'
                    },
                },
                labelLine: {
                    show: false
                }
            },
            emphasis: {
                label: {
                    show: true,
                    formatter: '{b}' + '\n\n' + '{c} ({d}%)',
                    position: 'center',
                    textStyle: {
                        fontSize: '17',
                        fontWeight: '500'
                    }
                }
            }
        },

        data: [{
                value: 435,
                name: 'Emitidas'
            },
            {
                value: 310,
                name: 'Cobradas'
            }
        ]
    }]
};

basicdoughnutChart.setOption(options);

$('.href_bd_cobra').click(function(e) {
    e.preventDefault();
    // a[href="#profile"]
    $('a[href="#beyond_option"]').tab('show');
    $('a[href="#cobranza-home"]').tab('show');
    $('a[href="#beyond-cobranza-callcenter"]').tab('show');
    $('a[href="#beyond-cobranza-callcenter-bd"]').tab('show');
    console.log("clicky");
})