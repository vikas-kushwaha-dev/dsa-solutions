class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSelectedElements($nums) {
        sort($nums);
        $dp = [];
        $answer = 0;

        foreach ($nums as $x) {
            // Increase this element to x + 1.
            $dp[$x + 1] = max($dp[$x + 1] ?? 0, ($dp[$x] ?? 0) + 1);

            // Leave this element as x.
            $dp[$x] = max($dp[$x] ?? 0, ($dp[$x - 1] ?? 0) + 1);

            $answer = max($answer, $dp[$x], $dp[$x + 1]);
        }

        return $answer;
    }
}