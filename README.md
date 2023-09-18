# Problem1CodingBot
def count_character(string, target):
    count = 0
    for char in string:
        if char == target:
            count += 1
    return count

string1 = "geeksforgeeks"
target1 = 'e'
print(count_character(string1, target1))  # Output: 4

string2 = "abccdefgaa"
target2 = '3'
print(count_character(string2, target2))  # Output: 3
