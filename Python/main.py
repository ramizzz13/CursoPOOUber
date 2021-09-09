from car import Car
from account import Account
from uberX import UberX

if __name__ == "__main__":
    print("Hola Mundo")
    
    car = Car ("AMS234", Account("Andres Herrera", "AND876"))
    print(vars(car))
    print(vars(car.driver))

    uberX = UberX("ASD123", Account("Ramiz Perez", "RPOZ3"), "Mazda", "M3")
    print(vars(uberX))
    # print(vars(uberX.driver))