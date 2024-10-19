last_semester_gradebook = [
  ["politics", 80],
  ["latin", 96],
  ["dance", 97],
  ["architecture", 65]
]

# Your code below: 
# Create a list called subjects
subjects = ["physics", "calculus", "poetry", "history"]

# Create a list called grades
grades = [98, 97, 85, 88]

# Create a two-dimensional list to combine subjects and grades
gradebook = [
  ["physics", 98],
  ["calculus", 97],
  ["poetry", 85],
  ["history", 88]
]

# Print gradebook
print(gradebook)

# Add the "computer science" and 100 values to the gradebook.
gradebook.append(["computer science", 100])

# Add the "visual arts" and 93 values to the gradebook.
gradebook.append(["visual arts", 93])

# Increase the grade in visual arts by 5
gradebook[5][1] = 98

# Remove the grade from the poetry
gradebook[2].remove(85)

# Add a new grade "Pass" in poetry
gradebook[2].append("Pass")

# Combine last_semester_gradebook and gradebook lists
full_gradebook = last_semester_gradebook + gradebook

# Print full_gradebook
print(full_gradebook)
