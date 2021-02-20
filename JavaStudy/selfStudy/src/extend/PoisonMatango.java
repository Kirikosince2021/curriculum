package extend;

public class PoisonMatango extends Matango {
	int leftPoison = 5;

	public PoisonMatango(char suffix) {
		super(suffix);
	}

	public void attack(Hero h) {
		super.attack(h);

		if(this.leftPoison > 0) {
			System.out.println("さらに毒の胞子をばら撒いた！");
			int poisonDamage = h.hp / 5;
			h.hp -= poisonDamage;
			System.out.println(poisonDamage+"ポイントのダメージ！");
			this.leftPoison--;
		}

	}
}