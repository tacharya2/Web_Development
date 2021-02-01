// let <- any data type variable, const <- Constant variable that does not change
const defaultResult = 0;
let currentResult = defaultResult;
let logEntries = [];

function getUserNumberInput() {
  return parseInt(userInput.value);
}

function createAndWriteOutput(operator, resultBeforeCalc, calcNumber) {
  const calcDescription = `${resultBeforeCalc} ${operator}  ${calcNumber}`;
  outputResult(currentResult, calcDescription);
}

function writeToLog(operationIdentifier, previousResult, operationNumber, newResult) {
  const logEntry = {
    operation: operationIdentifier,
    previousResult: previousResult,
    number: operationNumber,
    result: newResult
  };
  console.log(logEntry.operation)
  logEntries.push(logEntry);
  console.log(logEntries);
}


function add() {
  const eneteredNumber = getUserNumberInput(); //  +userInput.value
  const initialResult = currentResult;
  currentResult += eneteredNumber;
  createAndWriteOutput("+", initialResult, eneteredNumber);
  writeToLog("ADD",initialResult, eneteredNumber,currentResult)
}

function subtract() {
  const eneteredNumber = getUserNumberInput(); //  +userInput.value
  const initialResult = currentResult;
  currentResult -= eneteredNumber;
  createAndWriteOutput("-", initialResult, eneteredNumber);
  writeToLog("SUBTRACT",initialResult, eneteredNumber,currentResult)
}

function multiply() {
  const eneteredNumber = getUserNumberInput(); //  +userInput.value
  const initialResult = currentResult;
  currentResult *=  eneteredNumber;
  createAndWriteOutput("*", initialResult, eneteredNumber);
  writeToLog("MULTIPLY",initialResult, eneteredNumber,currentResult)
}

function divide() {
  const eneteredNumber = getUserNumberInput(); //  +userInput.value
  const initialResult = currentResult;
  currentResult /=  eneteredNumber;
  createAndWriteOutput("/", initialResult, eneteredNumber);
  writeToLog("DIVIDE",initialResult, eneteredNumber,currentResult)
}

addBtn.addEventListener('click', add);
subtractBtn.addEventListener('click', subtract);
multiplyBtn.addEventListener('click', multiply);
divideBtn.addEventListener('click', divide);
