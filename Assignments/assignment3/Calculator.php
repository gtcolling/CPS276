<?
class Calculator {
    public function calc($operator = 'default', $val1 = 'default', $val2 = 'default') {
        if ($val1 === 'default' || $val2 === 'default' || $operator === 'default') {
            return "You must enter a string and two numbers.<br>";
        }
        else 
        {
        Switch($operator) {
            case '+':
                return "The sum of the number is " . ($val1 + $val2) . ".<br>";
                break;
            case '-':
                return "The difference of the number is " . ($val1 - $val2) . ".<br>";
                break;
            case '/':
                   if ($val2 == 0) {
                        return "Cannot divide by zero. <br>";
                   }
                    else 
                        return "The division of the numer is " . ($val1 / $val2) . ".<br>";
                    break;
            case '*':
                return "The product of the number is " . ($val1 * $val2) . ".<br>";
                break;
            default:
                return "Incorrect operator.<br>";
                break;
        }
    }
}
}
?>