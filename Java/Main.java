package Java;

class Main {
    public static void main(String[] args) {
        System.out.println("Hola mundo");
      
        UberX uberX = new UberX( "AMQ123", 
        new Account ("Andres Herrera", "AND123"), "chevrolet", "sonic");
        uberX.setPassenger(4);
        uberX.printDataCar();

        UberVan uberVan = new UberVan("FGH254", new Account("Andres Herrera", "AND123"));
        uberVan.setPassenger(4);
        uberVan.printDataCar();

        /*Car car2 = new Car("QWE567", 
        new Account("Andrea Herrera", "ANDA876"));
        car2.passenger = 3;
        car2.printDataCar();*/
        
    }
}