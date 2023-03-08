<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Simple Pie</title>

    <link href="../../assets/styles.css" rel="stylesheet" />

    <style>
      
        #chart {
      padding: 0;
      max-width: 380px;
      margin: 35px auto;
    }
      
    </style>

    

    
  </head>

  <body>
    
    <div id="app"></div>

    <script type="text/babel">
      class ApexChart extends React.Component {
        constructor(props) {
          super(props);

          this.state = {
          
            series: [44, 55, 13, 43, 22],
            options: {
              chart: {
                width: 380,
                type: 'pie',
              },
              labels: ['Team A', 'Team B', 'Team C', 'Team D', 'Team E'],
              responsive: [{
                breakpoint: 480,
                options: {
                  chart: {
                    width: 200
                  },
                  legend: {
                    position: 'bottom'
                  }
                }
              }]
            },
          
          
          };
        }

      

        render() {
          return (
            <div>
              <div id="chart">
                <ReactApexChart options={this.state.options} series={this.state.series} type="pie" width={380} />
              </div>
              <div id="html-dist"></div>
            </div>
          );
        }
      }

      const domContainer = document.querySelector('#app');
      ReactDOM.render(React.createElement(ApexChart), domContainer);
    </script>

    
  </body>
</html>
