class Solution:
    def twoSum(self, numbers: list[int], target: int) -> list[int]:
        l, r = 0, len(numbers) - 1

        while l < r:
            currentSum = numbers[l] + numbers[r]

            if(currentSum < target):
                l += 1
            elif(currentSum > target):
                r -= 1
            else:
                return[l+1,r+1]

        return []