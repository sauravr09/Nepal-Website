// helper function; find the answer from radio input.
function checkOptions(items){
    let answer;
    for (let i=0; i<items.length; i++){
        if (items[i].checked){
            answer = items[i];
            break;
        }
    }
    return answer;
}

// show the expense estimator once clicked 
function showCalc(){

    let expenseCalc = document.getElementById("calc");

    if (expenseCalc.style.display != "none"){
        expenseCalc.style.display = "none";
        
    }
    else{
        expenseCalc.style.display = "block";
        expenseCalc.scrollIntoView({behavior: 'smooth'});

    }

}

// display the result of expense calculator based on inputs
function displayExpense(){
    let budget = parseInt(document.getElementById("budget").value);
    let days_option = document.getElementsByName("days");
    let activities_option = document.getElementsByName("expense-activity");
    let foods_option = document.getElementsByName("expense-meal");

    let selected_day = checkOptions(days_option).value;
    let selected_activity = checkOptions(activities_option).value;
    let selected_meal = checkOptions(foods_option).value;

    let total_expense = 0;
    let day_expense;
    let activity_expense;
    let meal_expense;

    //determine the days cost
    switch(selected_day){
        case '1':
            day_expense = 100;
            break;
        case '3':
            day_expense = 300;
            break;
        case '5':
            day_expense = 500;
            break;
        case '7':
            day_expense = 1000;
            break;
        default:
            day_expense = 100;
    }

    //determine the activity cost 
    switch(selected_activity){
        case 'temple':
            activity_expense = 10;
            break;
        case 'flying':
            activity_expense = 100;
            break;
        case 'sport':
            activity_expense = 75;
            break;
        case 'shopping':
            activity_expense = 30;
            break;
        default:
            activity_expense = 10;
    }

    // determine the meal cost
    switch(selected_meal){
        case '1':
            meal_expense = 5;
            break;
        case '2':
            meal_expense = 10;
            break;
        case '3':
            meal_expense = 15;
            break;
        case '4':
            meal_expense = 30;
            break;
        default:
            meal_expense = 5;
    }

    total_expense = day_expense + meal_expense + activity_expense;

    let results = document.getElementById("total-expense");
    let costs = document.getElementById("expense-cost");
    let determined = document.getElementById("expense-result");

    // results.innerText = "Excluding the transportation cost of getting to Nepal, you will have an expense of atleast: "
    // costs.innerText = "$"+total_expense+".00.";

    if (budget === "" || isNaN(budget)){
        let budg = document.getElementById("budget");
        budg.style.background = "crimson";
        budg.scrollIntoView({behavior: "smooth"});


    }
    else{
        results.innerText = "Excluding the transportation cost of getting to Nepal, you will have an expense of atleast: "
        costs.innerText = "$"+total_expense+".00.";
        if (total_expense <= budget){
            determined.innerText = "You are within your set budget.";
            determined.style.color = "green";
            costs.scrollIntoView({behavior: "smooth"});
        }
        else{
            determined.innerText = "You are not within your set budget.";
            determined.style.color = "red";
            costs.scrollIntoView({behavior: "smooth"});
        }
    }


}


