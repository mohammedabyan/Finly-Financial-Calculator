function calculateMetrics() {


    document.getElementById("OUTPUT").style.visibility = "visible";
    // Get form values
    const form = document.getElementById('simpleInput');
    const Sales = form.elements.grossRevenue.value;
    const Assets = form.elements.totalAssets.value;
    const Inventory = form.elements.inventory.value;
    const COGS = form.elements.costOfGoodsSold.value;
    const Liabilities = form.elements.totalLiabilities.value;
    const operatingExpenses = form.elements.operatingExpenses.value;


    // Calculate metrics
    const grossProfit = Sales - COGS;
    const operatingIncome = grossProfit - operatingExpenses;
    const currentLiquidity = Assets / Liabilities;
    const quickLiquidity = (Assets - Inventory) / Liabilities;
    const profitMargin = grossProfit / Sales;
    const returnOnAssets = grossProfit / Assets;

    // Display barchart
    const ctx1 = document.getElementById('salesChart').getContext('2d');
    const barChart = new Chart(ctx1, {
      type: 'bar',
      data: {
        labels: ['Gross Profit', 'Operating Income'],
        datasets: [{
          label: 'Amount',
          data: [grossProfit, operatingIncome],
          backgroundColor: [
          'rgba(128, 0, 128, 1)',
          'rgba(128, 0, 128, 0.8)',
          ], /* Purple */
          borderColor: 'White', /* Purple */
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });

    const ctx2 = document.getElementById('liquidityChart').getContext('2d');
    const liquidityChart = new Chart(ctx2, {
      type: 'bar',
      data: {
        labels: ['Current Liquidity', 'Quick (Acid Test)'],
        datasets: [{
          label: 'Percentage',
          data: [currentLiquidity, quickLiquidity],
          backgroundColor: [
          'rgba(128, 0, 128, 1)',
          'rgba(128, 0, 128, 0.8)',
          ], /* Purple */
          borderColor: 'White', /* Purple */
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });

    const ctx3 = document.getElementById('profitabilityChart').getContext('2d');
    const profitabilityChart = new Chart(ctx3, {
      type: 'bar',
      data: {
        labels: ['Profit Margin on Sales', 'Return on Assets'],
        datasets: [{
          label: 'Percentage',
          data: [profitMargin, returnOnAssets],
          backgroundColor: [
          'rgba(128, 0, 128, 1)',
          'rgba(128, 0, 128, 0.8)',
          ], /* Purple */
          borderColor: 'White', /* Purple */
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });

    gpText.innerHTML = grossProfit;
    oiText.innerHTML = operatingIncome;
    clText.innerHTML = currentLiquidity +"&#215;";
    atText.innerHTML = quickLiquidity +"&#215;";
    pmText.innerHTML = profitMargin +"&#215;";
    raText.innerHTML = returnOnAssets +"&#215;";

    document.getElementById("submit").style.visibility = "hidden";


}


function calculateSimpleMetrics() {


    document.getElementById("OUTPUT").style.visibility = "visible";
    // Get form values
    const form = document.getElementById('simpleInput');
    const Sales = form.elements.grossRevenue.value;
    const Inventory = form.elements.inventory.value;
    const COGS = form.elements.costOfGoodsSold.value;
    const operatingExpenses = form.elements.operatingExpenses.value;


    // Calculate metrics
    const grossProfit = Sales - COGS;
    const netProfit = grossProfit - operatingExpenses;
    const profitMargin = grossProfit / Sales;
    const inventoryTurnover = Sales / Inventory;

    // Display barchart
    const ctx1 = document.getElementById('salesChart').getContext('2d');
    const barChart = new Chart(ctx1, {
      type: 'bar',
      data: {
        labels: ['Gross Profit','netProfit'],
        datasets: [{
          label: 'Amount',
          data: [grossProfit, netProfit],
          backgroundColor: [
          'rgba(128, 0, 128, 1)',
          'rgba(128, 0, 128, 0.8)',
          ], /* Purple */
          borderColor: 'White', /* Purple */
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
    gpText.innerHTML =  grossProfit;
    npText.innerHTML = netProfit;

    const ctx2 = document.getElementById('profitabilityChart').getContext('2d');
    const profitabilityChart = new Chart(ctx2, {
      type: 'bar',
      data: {
        labels: ['Inventory Turnover', 'Profit Margin on Sales'],
        datasets: [{
          label: 'Percentage',
          data: [inventoryTurnover, profitMargin],
          backgroundColor: [
          'rgba(128, 0, 128, 1)',
          'rgba(128, 0, 128, 0.8)',
          ], /* Purple */
          borderColor: 'White', /* Purple */
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
    itText.innerHTML = inventoryTurnover +"&#215;";
    pmText.innerHTML = profitMargin +"&#215;";



    // document.getElementById("submit").style.visibility = "hidden";


}

function calculateAdvancedMetrics() {


  document.getElementById("OUTPUT").style.visibility = "visible";

  // Get form values
  const form = document.getElementById('advanced');
  const grossRevenue = form.elements.grossRevenue.value;
  const costOfGoodsSold = form.elements.cogs.value;
  const operatingExpenses = form.elements.operatingExpenses.value;
  const interestExpense = form.elements.interest.value;
  const incomeTaxExpense = form.elements.incomeTax.value;
  const currentAssets = form.elements.currentAssets.value;
  const currentLiabilities = form.elements.currentLiabilities.value;
  const inventory = form.elements.inventory.value;
  const fixedAssets = form.elements.fixedAssets.value;
  const totalAssets = form.elements.totalAssets.value;
  const totalLiabilities = form.elements.totalLiabilities.value;

  // Calculate metrics
  const grossProfit = Math.round(grossRevenue - costOfGoodsSold);
  const operatingIncome = Math.round(grossProfit - operatingExpenses);
  const incomeBeforeTax = Math.round(operatingIncome - interestExpense);
  const netProfit = Math.round(incomeBeforeTax - incomeTaxExpense);
  const currentLiquidity = Math.round(currentAssets / currentLiabilities);
  const quickLiquidity = Math.round((currentAssets - inventory) / currentLiabilities);
  const inventoryTurnover = Math.round(grossRevenue / inventory);
  const fixedAssetsTurnover = Math.round(grossRevenue / fixedAssets);
  const debtToTotalAssets = Math.round(totalLiabilities / totalAssets);
  const profitMargin = Math.round(netProfit / grossRevenue);
  const returnOnAssets = Math.round(netProfit / totalAssets);


  // Display barchart
  const ctx1 = document.getElementById('salesChart').getContext('2d');
  const salesChart = new Chart(ctx1, {
    type: 'bar',
    data: {
      labels: ['Gross Profit', 'Operating Income', 'Income Before Tax', 'Net Profit'],
      datasets: [{
        label: 'Amount',
        data: [grossProfit, operatingIncome, incomeBeforeTax, netProfit],
        backgroundColor: [
        'rgba(128, 0, 128, 1)',
        'rgba(128, 0, 128, 0.8)',
        'rgba(128, 0, 128, 0.6)',
        'rgba(128, 0, 128, 0.4)'
        ], /* Purple */
        borderColor: 'White', /* Purple */
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
  gpText.innerHTML =  grossProfit;
  oiText.innerHTML = operatingIncome;
  ibtText.innerHTML = incomeBeforeTax;
  npText.innerHTML = netProfit;

  // Display barchart
  const ctx2 = document.getElementById('liquidityChart').getContext('2d');
  const liquidityChart = new Chart(ctx2, {
    type: 'bar',
    data: {
      labels: ['Current Liquidity', 'Quick (Acid Test)'],
      datasets: [{
        label: 'Percentage',
        data: [currentLiquidity, quickLiquidity],
        backgroundColor: [
        'rgba(128, 0, 128, 1)',
        'rgba(128, 0, 128, 0.8)',
        ], /* Purple */
        borderColor: 'White', /* Purple */
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
  clText.innerHTML = currentLiquidity +"&#215;";
  atText.innerHTML = operatingIncome +"&#215;";

  // Display barchart
  const ctx3 = document.getElementById('assetManagementChart').getContext('2d');
  const assetManagementChart = new Chart(ctx3, {
    type: 'bar',
    data: {
      labels: ['Inventory Turnover', 'Fixed Assets Turnover'],
      datasets: [{
        label: 'Percentage',
        data: [inventoryTurnover, fixedAssetsTurnover],
        backgroundColor: [
        'rgba(128, 0, 128, 1)',
        'rgba(128, 0, 128, 0.8)',
        ], /* Purple */
        borderColor: 'White', /* Purple */
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
  itText.innerHTML = inventoryTurnover +"&#215;";
  faText.innerHTML = fixedAssetsTurnover +"&#215;";

  // Display barchart
  const ctx4 = document.getElementById('debtManagementChart').getContext('2d');
  const debtManagementChart = new Chart(ctx4, {
    type: 'bar',
    data: {
      labels: ['Debt to Total Assets'],
      datasets: [{
        label: 'Percentage',
        data: [debtToTotalAssets],
        backgroundColor: [
        'rgba(128, 0, 128, 1)',
        ], /* Purple */
        borderColor: 'White', /* Purple */
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
  dttaText.innerHTML = debtToTotalAssets +"&#215;";
  faText.innerHTML = fixedAssetsTurnover +"&#215;";

  // Display barchart
  const ctx5 = document.getElementById('profitabilityChart').getContext('2d');
  const profitabilityChart = new Chart(ctx5, {
    type: 'bar',
    data: {
      labels: ['Profit Margin on Sales', 'Return on Assets', 'Return on Equity'],
      datasets: [{
        label: 'Percentage',
        data: [profitMargin, returnOnAssets],
        backgroundColor: [
        'rgba(128, 0, 128, 1)',
        'rgba(128, 0, 128, 0.8)',
        ], /* Purple */
        borderColor: 'White', /* Purple */
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
  pmText.innerHTML = profitMargin +"&#215;";
  raText.innerHTML = returnOnAssets +"&#215;";

  // gpText.innerHTML = grossProfit;
  // oiText.innerHTML = operatingIncome;
  // clText.innerHTML = currentLiquidity +"&#215;";
  // atText.innerHTML = quickLiquidity +"&#215;";
  // pmText.innerHTML = profitMargin +"&#215;";
  // raText.innerHTML = returnOnAssets +"&#215;";

  pmText.innerHTML = profitMargin +"&#215;";
  raText.innerHTML = returnOnAssets +"&#215;";
  roeText.innerHTML = returnOnAssets +"&#215;";

//   document.getElementById("submit").style.visibility = "hidden";


}

