import java.util.Random;
import java.util.Scanner;

public class catWarrior {
    Scanner sc = new Scanner(System.in);
    Random r = new Random();

    public catWarrior(String name) {
        System.out.print("Введите имя кота - воина: ");
        this.name = name;
        this.str = 2 + r.nextInt(10);
        this.agi = 3 + r.nextInt(10);
        this.intel = 1 + r.nextInt(10);
        this.hp = 30 + str * 2;
        this.mp = intel * 7;
        this.atk = 5 + agi + str / 2;
        this.def = agi / 2;
        this.izanagi = false;
        this.lucky = 1 + r.nextInt(5);
        this.maxHp = this.hp;
        this.maxMp = this.mp;
    }

    public String name;
    public int str;
    public int agi;
    public int intel;
    public int hp;
    public int mp;
    public boolean izanagi;
    public int atk;
    public int def;
    public int lucky;
    public int maxHp;
    public int maxMp;

    static public void lucky(catWarrior c)
    {
        Random r = new Random();
        Scanner sc = new Scanner(System.in);

        System.out.println("Бонус!");
        int fortune = r.nextInt(3);
        int bonus = 1 + r.nextInt(3);
        if (fortune == 1) {
            c.str = c.str + bonus;
            c.hp = c.hp + bonus * 2;
            c.atk = c.atk + bonus / 2;
            System.out.println(c.name + " получает бонус к силе! Бонусных очков: " + bonus);
        } else if (fortune == 2) {
            c.agi = c.agi + bonus;
            c.def = c.def + bonus / 2;
            c.atk = c.atk + bonus;
            System.out.println(c.name + " получает бонус к ловкости! Бонусных очков: " + bonus);
        } else if (fortune == 3) {
            c.intel = c.intel + bonus;
            c.mp = c.mp + bonus * 7;
            System.out.println(c.name + " получает бонус к интеллекту! Бонусных очков: " + bonus);
        } else {
            System.out.println(c.name + " не повезло...");
            fortune = 1 + r.nextInt(3);
            System.out.println("Попробуйте угадать число от 1 до 3 и, если угадаете, вы получите +1 к случайному атрибуту ");
            System.out.print("Ваш ответ: ");
            int ans = sc.nextInt();
            if (ans == fortune) {
                if (fortune == 1) {
                    c.str = c.str + 1;
                    c.hp = c.hp + 2;
                    System.out.println("Отлично! " + c.name + " получает бонус к силе!");
                } else if (fortune == 2) {
                    c.agi = c.agi + 1;
                    c.atk = c.atk + 1;
                    c.def = c.def + 1;
                    System.out.println("Отлично! " + c.name + " получает бонус к ловкости!");
                } else if (fortune == 3) {
                    c.intel = c.intel + 1;
                    c.mp = c.mp + 10;
                    System.out.println("Отлично! " + c.name + " получает бонус к интелекту!");
                }
            } else {
                System.out.println("Было загадано число " + fortune + ". Вы не получаете бонуса.");
            }
        }


    }

    public void izanagi() {
        if (mp >= 45) {
            System.out.println("Кот " + name + " способен исольковать Изанаги!");
            izanagi = true;
        }
    }

    static public void strike(catWarrior c1, catWarrior c2) {
        Random r = new Random();
        Scanner sc = new Scanner(System.in);
        int dmg = 0;
        if (c2.hp > 0 && c1.hp > 0)
        {
            System.out.println("Кот " + c1.name + "(" + c1.hp + ")" + " атакует!");
            int chance = 1 + r.nextInt(5);
            dmg = c1.atk - c2.def;

            if (c1.lucky == chance)
            {
                int q = r.nextInt(1);
                System.out.print("Доступен критический удар! Угадайте число (0 или 1), чтобы применить его: ");
                int ans = sc.nextInt();
                if (q == ans)
                {
                    System.out.println(c1.name + "(" + c1.hp + ")" + " наносит критический удар!");
                    dmg = (int) (dmg * 1.5);
                }
                else
                {
                    System.out.println("Ответ был: " + q);
                }
            }
            chance = 1 + r.nextInt(5);
            if (c2.lucky == chance)
            {
                int a = 1 + r.nextInt(20);
                int b = 20 + r.nextInt(60);
                int c = 60 + r.nextInt(120);
                int sum = a + b + c;
                System.out.println(c2.name + "(" + c2.hp + ")" + " может увернуться от атаки противника");
                System.out.println("Для этого необходимо рассчитать траектория уклонения!");
                System.out.print("Дайте правильный ответ: " + a + " + " + b + " + " + c + " = ");
                int ans = sc.nextInt();
                if (sum == ans)
                {
                    System.out.println(c2.name + "(" + c2.hp + ")" + " уворачивается от атаки " + c1.name + "(" + c1.hp + ")" + "!");
                    dmg = 0;
                }
                else
                {
                    System.out.println(c2.name + "(" + c2.hp + ")" + " не удалось увернуться");
                }
            }
            else if (c2.lucky == chance + 1 || c2.lucky == chance - 1)
            {
                System.out.println(c2.name + "(" + c2.hp + ")" + " частично блокирует урон!");
                dmg = (int) (dmg / 2);
            }

            if (c2.hp - dmg <= 0 && c2.izanagi == true && c2.mp >= 45)
            {
                c2.hp = c2.maxHp / 2;
                c2.mp = c2.mp - 45;
                System.out.println(c2.name + " активирует Изанаги!");
                System.out.println(c2.name + " избегает смертельного удара!");
                System.out.println("После применения Изанаги, здоровье " + c2.name + " становится равным половине от максимального!"  + "(" + c2.hp + ")");
            }
            else if (c2.hp - dmg <= 0)
            {
                c2.hp = c2.hp - dmg;
                System.out.println(c1.name + "(" + c1.hp + ")" + " наносит " + dmg + " урона " + c2.name + "(" + c2.hp + ")" + "!");
                System.out.println(c2.name + " погибает.");
                System.out.println(c1.name + " победил!");
                System.out.println("Бой окончен!");
            }
            else
            {
                c2.hp = c2.hp - dmg;
                System.out.println(c1.name + "(" + c1.hp + ")" + " наносит " + dmg + " урона " + c2.name + "(" + c2.hp + ")" + "!");
            }
        }
        else
        {
            System.out.println("Бой окончен!");
        }


    }

    static public void restart(catWarrior c1, catWarrior c2)
    {
        c1.hp = c1.maxHp;
        c2.hp = c2.maxHp;
        c1.mp = c1.maxMp;
        c2.mp = c2.maxMp;
    }

    static public void newCats(catWarrior c1, catWarrior c2)
    {
        Scanner sc = new Scanner(System.in);
        Random r = new Random();

        System.out.print("Введите имя котика: ");
        c2.name = sc.nextLine();
        c2.str = 2 + r.nextInt(10);
        c2.agi = 3 + r.nextInt(10);
        c2.intel = 1 + r.nextInt(10);
        c2.hp = 30 + c2.str * 2;
        c2.mp = c2.intel * 7;
        c2.atk = 5 + c2.agi + c2.str / 2;
        c2.def = c2.agi / 2;
        c2.izanagi = false;
        c2.lucky = 1 + r.nextInt(5);

        System.out.print("Введите имя котика: ");
        c1.name = sc.nextLine();
        c1.str = 2 + r.nextInt(10);
        c1.agi = 3 + r.nextInt(10);
        c1.intel = 1 + r.nextInt(10);
        c1.hp = 30 + c1.str * 2;
        c1.mp = c1.intel * 7;
        c1.atk = 5 + c1.agi + c1.str / 2;
        c1.def = c1.agi / 2;
        c1.izanagi = false;
        c1.lucky = 1 + r.nextInt(5);
    }


}