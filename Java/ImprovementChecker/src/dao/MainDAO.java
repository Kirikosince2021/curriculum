package dao;

import java.sql.Connection;
import java.sql.Date;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;

import model.Scores;

public class MainDAO {

	private static final String POSTGRES_DRIVER = "org.postgresql.Driver";
	private static final String JDBC_CONNECTION = "jdbc:postgresql://localhost:5433/ImprovementChecker";
	private static final String USER = "postgres";
	private static final String PASS = "bahamuru27";

	public List<Scores> getList() {
		Connection connection = null;
		List<Scores> scoreList = new ArrayList<Scores>();
		try {
			Class.forName(POSTGRES_DRIVER);
			connection = DriverManager.getConnection(JDBC_CONNECTION,USER,PASS);

			String SQL = "SELECT DATE,SCORE1,SCORE2,SCORE3 FROM SCORES ORDER BY DATE";
			PreparedStatement preparedStatement = connection.prepareStatement(SQL);
			ResultSet resultSet = preparedStatement.executeQuery();

			while(resultSet.next()) {
				String date = resultSet.getDate("DATE").toString();
				int score1 = resultSet.getInt("score1");
				int score2 = resultSet.getInt("score2");
				int score3 = resultSet.getInt("score3");
				Scores scores = new Scores(date,score1,score2,score3);
				scoreList.add(scores);
			}

		} catch(ClassNotFoundException e) {
			e.printStackTrace();
		} catch(SQLException e) {
			e.printStackTrace();
		} finally {
			try {
				if (connection != null) {
					connection.close();
				}
			} catch(SQLException e) {
				e.printStackTrace();
			}
		}
		return scoreList;
	}

	public boolean registerScore(Scores todayScores) {
		Connection connection = null;

		try {
			Class.forName(POSTGRES_DRIVER);
			connection = DriverManager.getConnection(JDBC_CONNECTION,USER,PASS);

			String SQL = "INSERT INTO SCORES(DATE,SCORE1,SCORE2,SCORE3) VALUES(?,?,?,?)";
			PreparedStatement preparedStatement = connection.prepareStatement(SQL);
			Date date = Date.valueOf(todayScores.getDate());
			preparedStatement.setDate(1,date);
			preparedStatement.setInt(2, todayScores.getScoreOne());
			preparedStatement.setInt(3, todayScores.getScoreTwo());
			preparedStatement.setInt(4, todayScores.getScoreThree());
			int result = preparedStatement.executeUpdate();
			if(result != 1) { return false;}


		} catch(ClassNotFoundException e) {
			e.printStackTrace();
		} catch(SQLException e) {
			e.printStackTrace();
		} finally {
			try {
				if (connection != null) {
					connection.close();
				}
			} catch(SQLException e) {
				e.printStackTrace();
			}
		}
		return true;
	}
}
