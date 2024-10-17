weight = 41.5

# Ground Shipping
if weight <= 2:
  ground_shipping_cost = weight * 1.5 + 20
elif weight <= 6:
  ground_shipping_cost = weight * 3 + 20
elif weight <= 10:
  ground_shipping_cost = weight * 4 + 20
else:
  ground_shipping_cost = weight * 4.75 + 20

# round up the ground shipping cost
ground_shipping_cost = round(ground_shipping_cost, 2)

print("Ground Shipping: " + str(ground_shipping_cost) + "$")

# Ground Shipping Premium
ground_shipping_premium_cost = 125

print("Ground Shipping Premium: " +str(ground_shipping_premium_cost) + "$")

# Drone Shipping
if weight <= 2:
  drone_shipping_cost = weight * 4.50
elif weight <= 6:
  drone_shipping_cost = weight * 9
elif weight <= 10:
  drone_shipping_cost = weight * 12
else:
  drone_shipping_cost = weight * 14.25

# round up the drone shipping cost
drone_shipping_cost = round(drone_shipping_cost, 2)

print("Drone Shipping: " + str(drone_shipping_cost) + "$")

print()

# determine the cheapest method
if ground_shipping_cost < ground_shipping_premium_cost and ground_shipping_cost < drone_shipping_cost:
  # check with weight = 4.8
  print("Cheapest method: Ground Shipping, " + str(ground_shipping_cost) + "$")
elif ground_shipping_premium_cost < ground_shipping_cost and ground_shipping_premium_cost < drone_shipping_cost:
  # check with weight = 41.5
  print("Cheapest method: Ground Shipping Premium, " + str(ground_shipping_premium_cost) + "$")
else:
  # check with weight = 1.5
  print("Cheapest method: Drone Shipping, " + str(drone_shipping_cost) + "$")