import java.util.Scanner;

public class game
{
    public static void main(String[] args)
    {
        Scanner sc = new Scanner(System.in);
        catWarrior c1 = new catWarrior("Danzo");
        catWarrior c2 = new catWarrior("Obito");

        int n = 0;
        while (n != 5)
        {
            space();
            System.out.println(" 1 - Создать новых котиков");
            System.out.println(" 2 - Показать информацию о котиках");
            System.out.println(" 3 - Получить бонус");
            System.out.println(" 4 - Начать бой");
            System.out.println(" 5 - Выйти из программы");
            System.out.print(" :");
            n = sc.nextInt();
            switch (n)
            {
                case 1:
                {
                    catWarrior.newCats(c1, c2);
                    break;
                }
                case 2:
                {
                    space();
                    statistics(c1, c2);
                    System.out.println();
                    c1.izanagi();
                    c2.izanagi();
                    break;
                }
                case 3:
                {
                    space();
                    c1.lucky(c1);
                    space();
                    c2.lucky(c2);
                    break;
                }
                case 4:
                {
                    int k = 0;
                    while ( k != 5)
                    {
                        space();
                        System.out.println(" 1 - Бой");
                        System.out.println(" 2 - Информация о котиках");
                        System.out.println(" 3 - Рестарт");
                        System.out.println(" 4 - В главное меню");
                        System.out.println(" 5 - Выйти из программы");
                        System.out.print(" :");
                        k = sc.nextInt();
                        switch (k)
                        {
                            case 1:
                            {
                                space();
                                sword();
                                catWarrior.strike(c1, c2);
                                space();
                                catWarrior.strike(c2, c1);
                                sword();
                                break;
                            }
                            case 2:
                            {
                                space();
                                statistics(c1, c2);
                                c1.izanagi();
                                c2.izanagi();
                                break;
                            }
                            case 3:
                            {
                                catWarrior.restart(c1, c2);
                                break;
                            }
                            case 4:
                            {
                                k = 5;
                                break;
                            }
                            case 5:
                            {
                                n = 5;
                                break;
                            }
                        }
                    }
                }
            }
        }
    }
    public static void space()
    {
        System.out.println();
        System.out.println("                     *  *  *");
        System.out.println();

    }

    public static void statistics(catWarrior c1, catWarrior c2)
    {
        System.out.println("Имя (HP):   " + c1.name + "(" + c1.hp + ")" + "   VS   " + c2.name + "(" + c2.hp + ")");
        System.out.println("     MP :     (" + c1.mp + ")            (" + c2.mp + ")");
        System.out.println("  Атака :     (" + c1.atk + ")            (" + c2.atk + ")");
        System.out.println(" Защита :     (" + c1.def + ")             (" + c2.def + ")");
    }

    public static void sword()
    {
        System.out.println();
        System.out.println("0==(=======>");
        System.out.println();

    }
}
