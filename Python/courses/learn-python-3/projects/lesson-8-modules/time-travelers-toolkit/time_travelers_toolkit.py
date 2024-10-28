# Import the necessary modules
from datetime import datetime as dt
from decimal import Decimal
from random import randint, choice
import custom_module

# Get the current date and time
current_datetime = dt.today()

# Extract the current date, time, and year
current_date = current_datetime.date()
current_time = current_datetime.strftime("%H:%M")
current_year = current_datetime.year
print(f"Current date: {current_date}. Current time: {current_time}")

# Define the base cost of time travel and the cost multiplier
base_cost = Decimal("2300.00")
cost_multiplier = Decimal("0.10")
# target_year = 2027

# Calculate the difference between the current year and the target year
# year_difference = abs(current_year - target_year)

# Generate a random year for time travel
random_year = randint(current_year, 2050)
# print(random_year)

# Calculate the difference between the current year and the random year
year_difference = abs(current_year - random_year)

# Calculate the final cost of the time travel based on year difference
final_cost = base_cost + (base_cost * Decimal(year_difference) * cost_multiplier)
# print(f"The cost of your travel to {target_year} is: ${final_cost:.2f}")

# List of popular travel destinations
destinations = ["Paris", "Kyoto", "New York City", "Rome", "Bali", "Cape Town", "Sydney", "Santorini", "Barcelona", "Machu Picchu"]

# Select a random destination from the list
random_destination = choice(destinations)
# print(random_destination)

# Generate a message about the time travel using the custom module's function
generated_message = custom_module.generate_time_travel_message(random_year, random_destination, final_cost)
print(generated_message)