// $('#beyond_option-tab').on('shown.bs.tab', function(e) {
//     // myChart.setOption(options);
//     console.log('diste click');
//     let stackedChart = echarts.init(document.getElementById('stacked-line'));
//     let option = {

//         grid: {
//             left: '1%',
//             right: '2%',
//             bottom: '3%',
//             containLabel: true
//         },
//         tooltip: {
//             trigger: 'axis'
//         },
//         // Add legend
//         legend: {
//             data: ['Data1', 'Data2', 'Data3', 'Data4', 'Data5']
//         },

//         // Add custom colors
//         color: ['#4974e0', '#3db76b', '#689f38', '#ff8f00', '#ee1044'],

//         // Enable drag recalculate
//         calculable: true,

//         // Hirozontal axis
//         xAxis: [{
//             type: 'category',
//             boundaryGap: false,
//             data: [
//                 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'
//             ]
//         }],

//         // Vertical axis
//         yAxis: [{
//             type: 'value'
//         }],

//         // Add series
//         series: [{
//                     name: 'Data1',
//                     type: 'line',
//                     stack: 'Total',
//                     data: [125, 254, 125, 105, 75, 235, 215]
//                 },
//                 {
//                     name: 'Data2',
//                     type: 'line',
//                     stack: 'Total',
//                     data: [245, 495, 201, 245, 215, 345, 301]
//                 },
//                 {
//                     name: 'Data3',
//                     type: 'line',
//                     stack: 'Total',
//                     data: [125, 545, 320, 158, 215, 325, 412]
//                 },
//                 {
//                     name: 'Data4',
//                     type: 'line',
//                     stack: 'Total',
//                     data: [325, 258, 302, 359, 345, 359, 369]
//                 },
//                 {
//                     name: 'Data5',
//                     type: 'line',
//                     stack: 'Total',
//                     data: [958, 459, 923, 954, 1258, 1523, 1354]
//                 }
//             ]
//             // Add series

//     };
//     stackedChart.setOption(option);

//     let basicdoughnutChart = echarts.init(document.getElementById('basic-doughnut'));
//     let options = {
//         // Add title
//         title: {
//             text: 'Concentrado de pólizas',
//             subtext: 'Emisiones / Cobro',
//             x: 'center'
//         },

//         // Add legend
//         legend: {
//             orient: 'vertical',
//             x: 'left',
//             data: ['Emitadas', 'Cobradas', 'ss']
//         },

//         // Add custom colors
//         color: ['#f36f63', '#555'],

//         // Display toolbox
//         toolbox: {
//             show: true,
//             orient: 'vertical',
//             feature: {
//                 mark: {
//                     show: true,
//                     title: {
//                         mark: 'Markline switch',
//                         markUndo: 'Undo markline',
//                         markClear: 'Clear markline'
//                     }
//                 },
//                 dataView: {
//                     show: false,
//                     readOnly: false,
//                     title: 'View data',
//                     lang: ['View chart data', 'Close', 'Update']
//                 },
//                 magicType: {
//                     show: true,
//                     title: {
//                         pie: 'Switch to pies',
//                         funnel: 'Switch to funnel',
//                     },
//                     type: ['pie', 'funnel'],
//                     option: {
//                         funnel: {
//                             x: '25%',
//                             y: '20%',
//                             width: '50%',
//                             height: '70%',
//                             funnelAlign: 'left',
//                             max: 1548
//                         }
//                     }
//                 },
//                 restore: {
//                     show: false,
//                     title: 'Restore'
//                 },
//                 saveAsImage: {
//                     show: false,
//                     title: 'Same as image',
//                     lang: ['Save']
//                 }
//             }
//         },

//         // Enable drag recalculate
//         calculable: true,

//         // Add series
//         series: [{
//             name: 'Pólizas',
//             type: 'pie',
//             radius: ['35%', '70%'],
//             // center: ['50%', '57.5%'],
//             itemStyle: {
//                 normal: {
//                     label: {
//                         show: true
//                     },
//                     labelLine: {
//                         show: true
//                     }
//                 },
//                 emphasis: {
//                     label: {
//                         show: true,
//                         formatter: '{b}' + '\n\n' + '{c} ({d}%)',
//                         position: 'center',
//                         textStyle: {
//                             fontSize: '17',
//                             fontWeight: '500'
//                         }
//                     }
//                 }
//             },

//             data: [{
//                     value: 435,
//                     name: 'Emitidas'
//                 },
//                 {
//                     value: 310,
//                     name: 'Cobradas'
//                 }
//             ]
//         }]
//     };

//     basicdoughnutChart.setOption(options);

//     let basicdoughnut2Chart = echarts.init(document.getElementById('basic-doughnut2'));
//     let option2 = {
//         // Add title
//         title: {
//             text: 'Tipificación general total',
//             subtext: 'Total de llamadas',
//             x: 'center'
//         },

//         // Add legend
//         legend: {
//             orient: 'vertical',
//             x: 'left',
//             data: ['Motivo de venta', 'Asistencia Ubbitt', 'Otros productos', 'Atención clientes', 'Dudas de cobranza']
//         },

//         // Add custom colors
//         color: ['#2c72f0', '#4bb6cc', '#ec4497', '#f06c39', '#f5a841'],

//         // Display toolbox
//         toolbox: {
//             show: true,
//             orient: 'vertical',
//             feature: {
//                 mark: {
//                     show: true,
//                     title: {
//                         mark: 'Markline switch',
//                         markUndo: 'Undo markline',
//                         markClear: 'Clear markline'
//                     }
//                 },
//                 dataView: {
//                     show: false,
//                     readOnly: false,
//                     title: 'View data',
//                     lang: ['View chart data', 'Close', 'Update']
//                 },
//                 magicType: {
//                     show: true,
//                     title: {
//                         pie: 'Switch to pies',
//                         funnel: 'Switch to funnel',
//                     },
//                     type: ['pie', 'funnel'],
//                     option: {
//                         funnel: {
//                             x: '25%',
//                             y: '20%',
//                             width: '50%',
//                             height: '70%',
//                             funnelAlign: 'left',
//                             max: 1548
//                         }
//                     }
//                 },
//                 restore: {
//                     show: false,
//                     title: 'Restore'
//                 },
//                 saveAsImage: {
//                     show: false,
//                     title: 'Same as image',
//                     lang: ['Save']
//                 }
//             }
//         },

//         // Enable drag recalculate
//         calculable: true,

//         // Add series
//         series: [{
//             name: 'Llamadas',
//             type: 'pie',
//             radius: ['35%', '70%'],
//             // center: ['50%', '57.5%'],
//             itemStyle: {
//                 normal: {
//                     label: {
//                         show: true
//                     },
//                     labelLine: {
//                         show: true
//                     }
//                 },
//                 emphasis: {
//                     label: {
//                         show: true,
//                         formatter: '{b}' + '\n\n' + '{c} ({d}%)',
//                         position: 'center',
//                         textStyle: {
//                             fontSize: '17',
//                             fontWeight: '500'
//                         }
//                     }
//                 }
//             },

//             data: [{
//                     value: 335,
//                     name: 'Motivo de venta'
//                 },
//                 {
//                     value: 310,
//                     name: 'Asistencia Ubbitt'
//                 },
//                 {
//                     value: 234,
//                     name: 'Otros productos'
//                 },
//                 {
//                     value: 135,
//                     name: 'Atención clientes'
//                 },
//                 {
//                     value: 1548,
//                     name: 'Dudas de cobranza'
//                 }
//             ]
//         }]
//     };

//     basicdoughnut2Chart.setOption(option2);
// })

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
        data: ['Data1', 'Data2', 'Data3', 'Data4', 'Data5']
    },

    // Add custom colors
    color: ['#4974e0', '#3db76b', '#689f38', '#ff8f00', '#ee1044'],

    // Enable drag recalculate
    calculable: true,

    // Hirozontal axis
    xAxis: [{
        type: 'category',
        boundaryGap: false,
        data: [
            'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'
        ]
    }],

    // Vertical axis
    yAxis: [{
        type: 'value'
    }],

    // Add series
    series: [{
                name: 'Data1',
                type: 'line',
                stack: 'Total',
                data: [125, 254, 125, 105, 75, 235, 215]
            },
            {
                name: 'Data2',
                type: 'line',
                stack: 'Total',
                data: [245, 495, 201, 245, 215, 345, 301]
            },
            {
                name: 'Data3',
                type: 'line',
                stack: 'Total',
                data: [125, 545, 320, 158, 215, 325, 412]
            },
            {
                name: 'Data4',
                type: 'line',
                stack: 'Total',
                data: [325, 258, 302, 359, 345, 359, 369]
            },
            {
                name: 'Data5',
                type: 'line',
                stack: 'Total',
                data: [958, 459, 923, 954, 1258, 1523, 1354]
            }
        ]
        // Add series

};
stackedChart.setOption(option);

let basicdoughnutChart = echarts.init(document.getElementById('basic-doughnut'));
let options = {
    // Add title
    title: {
        text: 'Concentrado de pólizas',
        subtext: 'Emisiones / Cobro',
        x: 'center'
    },

    // Add legend
    legend: {
        orient: 'vertical',
        x: 'left',
        data: ['Emitidas', 'Cobradas']
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

let basicdoughnut2Chart = echarts.init(document.getElementById('basic-doughnut2'));
let option2 = {
    // Add title
    title: {
        text: 'Tipificación general total',
        subtext: 'Total de llamadas',
        x: 'center'
    },

    // Add legend
    legend: {
        orient: 'vertical',
        x: 'left',
        data: ['Motivo de venta', 'Asistencia Ubbitt', 'Otros productos', 'Atención clientes', 'Dudas de cobranza']
    },

    // Add custom colors
    color: ['#2c72f0', '#4bb6cc', '#ec4497', '#f06c39', '#f5a841'],

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
        name: 'Llamadas',
        type: 'pie',
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
                value: 335,
                name: 'Motivo de venta'
            },
            {
                value: 310,
                name: 'Asistencia Ubbitt'
            },
            {
                value: 234,
                name: 'Otros productos'
            },
            {
                value: 135,
                name: 'Atención clientes'
            },
            {
                value: 1548,
                name: 'Dudas de cobranza'
            }
        ]
    }]
};

basicdoughnut2Chart.setOption(option2);