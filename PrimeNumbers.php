<?php

class PrimeNumbers
{
    public $horizontalNum = "\n%s|";
    public $verticalNum = "%5.5s ";

    function primeNo()
    {
        //read Value from the command prompt
        $argv = getopt(null, ["count:"]);
        if (count($argv) == 0) exit;

        //argv is an array
        foreach ($argv as $arg)
            $n = $arg;

        $primeNumber = array();
        for ($i = 1; $i <= $n; $i++) {

            $counter = 0;
            for ($j = 1; $j <= $i; $j++) {

                if ($i % $j == 0) {
                    $counter++;
                }
            }

            if ($counter == 2) {
                $primeNumber[$i] = $i;
            }
        }
        return $primeNumber;
    }

    function printTable($array1, $array2)
    {
        foreach ($array1 as $head) {
            printf($this->verticalNum, $head);
        }

        printf($this->horizontalNum, '');

        foreach ($array2 as $vert_head) {
            printf($this->horizontalNum, $vert_head);

            foreach ($array1 as $hor_head) {
                printf($this->verticalNum, ($vert_head * $hor_head));

            }
        }
    }
}

$obj = new PrimeNumbers();
$primeNumber = $obj->primeNo();
$data = $obj->printTable($primeNumber, $primeNumber);
print $data;