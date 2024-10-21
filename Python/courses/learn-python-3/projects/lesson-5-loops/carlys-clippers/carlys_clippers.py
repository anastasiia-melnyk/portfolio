hairstyles = ["bouffant", "pixie", "dreadlocks", "crew", "bowl", "bob", "mohawk", "flattop"]

prices = [30, 25, 40, 20, 20, 35, 50, 35]

last_week = [2, 3, 5, 8, 4, 4, 6, 2]

# Task 1.
total_price = 0

# Task 2.
for price in prices:
  total_price += price
  #print(total_price)

# Task 3.
average_price = total_price / len(prices)

# Task 4.
print("Average Haircut Price: " + str(average_price))

# Task 5.
new_prices = [price - 5 for price in prices]

# Task 6.
print(new_prices)

# Task 7.
total_revenue = 0

# Task 8.
for i in range(len(hairstyles)):
  # Task 9
  total_revenue += prices[i] * last_week[i]

# Task 10.
print("Total Revenue: " + str(total_revenue))

# Task 11.
average_daily_revenue = total_revenue / 7
print(average_daily_revenue)

# Task 12.
cuts_under_30 = [hairstyles[i] for i in range(len(new_prices)) if new_prices[i] < 30]

# Task 13.
print(cuts_under_30)
