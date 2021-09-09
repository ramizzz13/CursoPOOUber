class Main{
    public static void main(String[] args) {
        System.out.println("Hola Mundo");

        UberX uberX = new UberX("AMQ123", new Account("Andres Herrera", "AND123"), "Mazda", "M3");
        uberX.setPassenger(4);
        uberX.printDataCar();

/*         Car car2 = new Car("QWE567", new Account("Andrea Herrera", "ANDA(/&"));
        //car2.license = "QWE567";
        //car2.driver = "Andrea Herrera";
        car2.passenger = 3;
        //System.out.println("Car License: " + car2.license);
        car2.printDataCar(); */
    }
}