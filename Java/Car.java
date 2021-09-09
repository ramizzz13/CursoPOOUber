class Car{
    Integer id;
    String license;
    Account driver;
    private Integer passenger;

    public Integer getPassenger() {
        return passenger;
    }

    public void setPassenger(Integer passenger) {
        if (passenger == 4){
            this.passenger = passenger;
        } else {
            System.out.println("Necesita asignar 4 pasajeros");
        }
    }

    public Car(String license, Account driver){
        this.license = license;
        this.driver = driver;
    }

    void printDataCar(){
        if (passenger != null){
            System.out.println("License:" + license + " Driver: " + driver.name +  " Passengers: " + passenger);
        }
        
    }

    

}