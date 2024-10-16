# Task 1: add a Lovely Loveseat item description
lovely_loveseat_description = """
Lovely Loveseat.
Tufted polyester blend on wood. 32 inches high x 40 inches wide x 30 inches deep. Red or white.
"""

# Task 2: add a price for the Lovely Loveseat item
lovely_loveseat_price = 254.00

# Task 3: add a Stylish Settee item description
stylish_settee_description = """
Stylish Settee.
Faux leather on birch. 29.50 inches high x 54.75 inches wide x 28 inches deep. Black.
"""

# Task 4: add a price for the Stylish Settee item
stylish_settee_price = 180.50

# Task 5: add a Luxurious Lamp item description
luxurious_lamp_description = """
Luxurious Lamp.
Glass and iron. 36 inches tall. Brown with cream shade.
"""

# Task 6: add a price for the Luxurious Lamp item
luxurious_lamp_price = 52.15

# Task 7: define the sales tax rate
sales_tax = .088

# Task 8: set the total price of the first customer's items
customer_one_total = 0

# Task 9: set the list of the first customer's items
customer_one_itemization = ""

# Task 10: add the Lovely Loveseat item to the total price
customer_one_total = 254.00

# Task 11: add the Lovely Loveseat item to the list of items
customer_one_itemization = lovely_loveseat_description

# Task 12: add the Luxurious Lamp item to the total price
customer_one_total += 52.15

# Task 13: add the Luxurious Lamp item to the list of item
customer_one_itemization += luxurious_lamp_description

# Task 14: calculate the sales tax based on the total price
customer_one_tax = customer_one_total * sales_tax

# Task 15: add the sales tax to the total price
customer_one_total += customer_one_tax

# Task 16: print out the phrase "Customer One Items:"
print("Customer One Items:")

# Task 17: print out customer_one_itemization
print(customer_one_itemization)

# Task 18: print out the phrase "Customer One Total:"
print("Customer One Total:")

# Task 20: print out customer_one_total
print(customer_one_total)