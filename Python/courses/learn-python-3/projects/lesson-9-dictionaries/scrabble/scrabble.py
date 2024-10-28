letters = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"]
points = [1, 3, 3, 2, 1, 4, 2, 4, 1, 8, 5, 1, 3, 4, 1, 3, 10, 1, 1, 1, 1, 4, 4, 8, 4, 10]

# Task 1.
# Create a dictionary that maps each letter to its corresponding point value
letter_to_points = {key: value for key, value in zip(letters, points)}
print(letter_to_points)

# Task 2.
# Add a key-value pair for space with 0 points
letter_to_points[" "] = 0

# Task 3, 4, 5, 6.
# Define a function that calculates the score of a word
def score_word(word):
  point_total = 0
  for letter in word.upper(): # word.upper() - task 15, convert the word to uppercase to handle case-insensitivity
    point_total += letter_to_points.get(letter, 0)
  return point_total

# Task 7, 8.
# Calculate the score for the word "BROWNIE"
brownie_points = score_word("BROWNIE")
print(brownie_points)

# Task 9.
# Initialize a dictionary to map players to their played words
player_to_words = {}

# Update the dictionary with players and their corresponding words
player_to_words.update({"player1": ["BLUE",	"TENNIS",	"EXIT"], "wordNerd": ["EARTH", "EYES",	"MACHINE"], "Lexi Con": ["ERASER",	"BELLY",	"HUSKY"], "Prof Reader": ["ZAP", "COMA", "PERIOD"]})
# print(player_to_words)

# Task 10, 11, 12, 13, 14.
# Create a dictionary to store players' points
player_to_points = {}

# Iterate over each player and their list of words
for player, words in player_to_words.items():
  player_points = 0
  # Calculate total points for each word the player has played
  for word in words:
    player_points += score_word(word)
  player_to_points[player] = player_points
print(player_to_points)

# Task 15.
# Define a function that adds a new word to a player's list
def play_word(player, word):
  player_to_words[player] = player_to_words.get(player, [])
  player_to_words[player].append(word)

# Test the play_word function by adding new words for players
play_word("Lexi Con", "Newword")
play_word("Prof Reader", "Apple")
print(player_to_words)

# Define a function that updates the total points for all players
def update_point_totals():
    for player, words in player_to_words.items():
        player_points = 0
        for word in words:
            player_points += score_word(word)
        player_to_points[player] = player_points
# Call the function to update point totals
update_point_totals()
print(player_to_points)